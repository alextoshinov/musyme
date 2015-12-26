<?php
/**
 * Links class.
 * @package    Links
 * @category   Model
 * @author     Alex Toshinov
 * @copyright  (c) 2015 Alex Web design http://a-w-d.biz
 * @license    http://kohanaframework.org/license
 */
class Model_Links extends ORM
{
    protected $_table_name = 'links';
    //
    /**
     * <Get all links>
     * @author Alex Toshinov <alex.toshinov@gmail.com>
     * @param $category_id
     * @param integer $language_id
     * @return array
    */
    public static function getLinks($catalog_id, $language_id)
    {
        $links = DB::select()
                ->from('links')
                ->where('catalog_id', '=', $catalog_id)
                ->and_where('language_id', '=', $language_id)
                ->and_where('is_public', '=', 1)
                ->order_by('date_added')
                ->execute()
                ;
        
        $final = array();

        foreach($links as $link)
        {
                $final[] = $link;
        }
        return $final;
    }
    //
    public static function countLinks($category_id)
    {
        return DB::select()
                ->from('links')
                ->join('catalogs', 'left')
                ->on('links.catalog_id', '=', 'catalogs.catalog_id')
                ->join('categories', 'left')
                ->on('categories.category_id', '=', 'catalogs.category_id')
                ->where('categories.category_id', '=', $category_id)            
                ->and_where('links.is_public', '=', 1)
                ->order_by('links.date_added')
                ->execute()
                ->count();
    }
    //
    public static function getAllLinks($category_id,$source_id=false, $catalog_id=false,$language_id=false)
    {
        $links = DB::select(
                    'links.link_id',
                    'links.url',
                    'links.source_id',
                    'links.title',
                    'links.catalog_id',
                    'links.image_name',
                    'links.language_id',
                    'links.agegroup_id',
                    'links.date_added',
                    'links.is_public'
                )
                ->from('links')
                ->join('catalogs', 'left')
                ->on('links.catalog_id', '=', 'catalogs.catalog_id')
                ->join('categories', 'left')
                ->on('categories.category_id', '=', 'catalogs.category_id')
                ->where('categories.category_id', '=', $category_id)
                ;
        //
        if($source_id)
        {
            $links = $links->and_where_open();
            $links = $links->where('source_id','=',$source_id);
            $links = $links->or_where_close();
        }
        
        
        if($catalog_id)
        {
            $links = $links->and_where_open();
            $links = $links->where('catalog_id','=',$catalog_id);
            $links = $links->or_where_close();
        }
        //
        if($language_id)
        {
            $links = $links->and_where_open();
            $links = $links->where('language_id','=',$language_id);
            $links = $links->or_where_close();
        }
                
        $links =$links->order_by('links.date_added','DESC');
        $links =$links->execute();
            
        $categoryName = Model_Categories::getNameById($category_id);
        $final = array();

        foreach($links as $key => $val)
        {
            $final[$key] = $val;
            $source = Model_Sources::getProvider($val['source_id']);   
            $final[$key]['source_id'] = $source['name'];
            $catalog = Model_Catalogs::getCatalogById($val['catalog_id']);
            $final[$key]['catalog'] = $catalog[0]['name'];
            $final[$key]['language_id'] = Model_Languages::getLangIconById($val['language_id']);
            if(!empty($val['date_added']))
            {
               $final[$key]['date_added'] = date('d.m.Y',$val['date_added']); 
            }
            $final[$key]['actions'] = '<a href="'.URL::base().'dashboard/edit'.$categoryName.'/'.$val['link_id'].'" class="btn btn-primary btn-circle Edit'.$categoryName.'" type="button"><i class="fa fa-edit"></i></a>&nbsp;<button data-id="'.$val['link_id'].'" class="btn btn-danger btn-circle Delete'.$categoryName.'" type="button"><i class="fa fa-remove"></i></button>';
        }
        return $final;
    }
    //
    public static function addLink($linkArr)
    {
        $result = ORM::factory('Links');
        $result->values($linkArr);
        $result->save();
        if($result->saved())
        {
            return $result->pk();
        } else {
            return false;
        }
    }
    //
    public static function getLinkById($link_id)
    {
        $links = DB::select()
                ->from('links')
                ->where('link_id', '=', $link_id)                
                ->execute()
                ;
        
        $final = array();
        //
        foreach($links as $link)
        {
            $final[] = $link;
        }
        return $final;
    }
    //
    public static function editLink($varsArray, $link_id)
    {
        $query = DB::update('links')->set($varsArray)->where('link_id','=',$link_id);
        $query->execute();
    }
    /**
     * <Delete Link>
     * @author Alex Toshinov <alex.toshinov@bgomedia.net>
     * @param Integer $link_id
     * @return Boolean result
 */
    public static function deleteLink($link_id)
    {
        $link = $query = DB::delete('links')->where('link_id', '=', $link_id )->execute();
        return $link;
    }
    //
    public static function checkIfExpired($provider, $video_id)
    {
        if($provider === "youtube" OR $provider === "vimeo")
        {
            switch($provider)
            {
                case 'youtube':
                    $URL = "http://www.youtube.com/oembed?url=http://www.youtube.com/watch?v=".$video_id."&format=json";
                    break;
                case 'vimeo':
                    $URL = "https://vimeo.com/api/oembed.json?url=https%3A//vimeo.com/".$video_id;
                    break;
            }
            //
            $headers = get_headers($URL);
            if (substr($headers[0], 9, 3) !== "404") {
                return true;
            } else {
                return false;
            }
            //
        } else if($provider === "vbox")
        {
            $URL = "http://vbox7.com/etc/ext.do?key=".$video_id;
            $vbox7 = file_get_contents("http://vbox7.com/etc/ext.do?key=".$video_id);
            $pos = strpos($vbox7, "errorInfo");
            if ($pos === false) {
                return true;
            } else {
                return false;
            }
        }
        //        
    }
    //
    public static function updatePublish()
    {
        $links = DB::select()
                ->from('links')
                ->execute()
                ;        
        //
        foreach($links as $val)
        {
            $s = Model_Sources::getProvider($val['source_id']);
             if(self::checkIfExpired($s['name'], $val['url']))
             {
                self::editLink(array('is_public'=>1), $val['link_id']);
             } else {
                self::editLink(array('is_public'=>0), $val['link_id']);
             }
        }
        //
    }
    //
    
}

