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
        $links = DB::select()
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
                
        $links =$links->order_by('links.date_added');
        $links =$links->execute();
                
        $categoryName = Model_Categories::getNameById($category_id);
        $final = array();

        foreach($links as $key => $val)
        {
            $final[$key] = $val;
            $source = Model_Sources::getProvider($val['source_id']);
            $final[$key]['source_id'] = $source['name'];
            $catalog = Model_Catalogs::getCatalogById($val['catalog_id']);
            $final[$key]['catalog_id'] = $catalog[0]['name'];
            $final[$key]['language_id'] = Model_Languages::getLangIconById($val['language_id']);
            if(!empty($val['date_added']))
            {
               $final[$key]['date_added'] = date('d.m.Y',$val['date_added']); 
            }
            $final[$key]['actions'] = '<a href="'.URL::base().'dashboard/edit'.$categoryName.'/'.$val['catalog_id'].'" class="btn btn-primary btn-circle Edit'.$categoryName.'" type="button"><i class="fa fa-edit"></i></a>&nbsp;<button data-id="'.$val['catalog_id'].'" class="btn btn-danger btn-circle Delete'.$categoryName.'" type="button"><i class="fa fa-remove"></i></button>';
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
    
}

