<?php
/**
 * Catalog class.
 * @package    Catalog
 * @category   Model
 * @author     Alex Toshinov
 * @copyright  (c) 2015 Alex Web design http://a-w-d.biz
 * @license    http://kohanaframework.org/license
 */
class Model_Catalogs extends ORM
{
    protected $_table_name = 'catalogs';
    //
    /**
     * <Add catalogs>
     * @author Alex Toshinov <alex.toshinov@gmail.com>
     * @param array $catalogArr
     * @return integer $pk
    */
    public static function addCatalog($catalogArr)
    {
        $result = ORM::factory('Catalogs');
        $result->values($catalogArr);
        $result->save();
        if($result->saved())
        {
            return $result->pk();
        } else {
            return false;
        }
    }
    //
    public static function getCatalogById($catalog_id)
    {
      $final = array();
      $catalog = DB::select()
            ->from('catalogs')
            ->where('catalog_id','=',$catalog_id)
            ->execute()
            ;
        foreach($catalog as $val)
        {
          $final[] = $val;
        }
        return $final;
    }
    //
    public static function editCatalog($varsArray, $catalog_id)
    {
      $query = DB::update('catalogs')->set($varsArray)->where('catalog_id','=',$catalog_id);
      $query->execute();
    }
    /**
     * <Delete Catalog>
     * @author Alex Toshinov <alex.toshinov@bgomedia.net>
     * @param $id
     * @return result
 */
    public static function deleteCatalog($id)
    {
        $catalog = $query = DB::delete('catalogs')->where('catalog_id', '=', $id )->execute();
        return $catalog;
    }
    /**
     * <Get all catalogs>
     * @author Alex Toshinov <alex.toshinov@gmail.com>
     * @param $category_id
     * @return array
    */
    public static function listAll($category_id, $language_id)
    {
        $catalogs = ORM::factory('Catalogs');
        $catalogs->where('category_id', '=', $category_id);
        $catalogs->and_where('language_id', '=', $language_id);
        //
        $catalogsVar = $catalogs->find_all();
        $final = array();

        foreach($catalogsVar as $val)
        {
                $final[] = $val->as_array();
        }
        return $final;
    }
    //
    public static function getAllSelect ($category_id)
    {
        $catalogs = DB::select()
                ->from('catalogs')
                ->where('category_id', '=', $category_id)
                ->execute()
                ;
        
        foreach($catalogs as $c)
        {
            $final[] = $c;
        }
        return $final;
    }
    //
    public static function getAll($limit = 0, $offset = 0, $orderby = 'catalog_id', $ordertype = 'ASC')
    {
        $legsVar = DB::select_array(array('catalog_id',
                                          'category_id',
                                          'name',
                                          'image_name',
                                          'language_id',
                                          'user_id',
                                          'agegroup_id',
                                          'date_added',                                                              
                                          'is_public'
                                          ))
            ->from('catalogs');
        
        
        // Limit
        if( $limit != '' AND $limit > 0)
        {
            $legsVar = $legsVar->limit($limit);
        }
        // Offset
        if( $offset != '' AND $offset > 0)
        {
            $legsVar = $legsVar->offset($offset);
        }

        $legsVar = $legsVar->execute();

//        print '<pre>'; print_r($legsVar);exit;
        //
        $final = array();
        $i=0;       
        foreach($legsVar as $key=>$val)
        {
            $final[$key] = $val;
            $final[$key]['category_id'] = Model_Categories::getNameById($val['category_id']);
            $final[$key]['language_id'] = Model_Languages::getLangIconById($val['language_id']);
            if(!empty($val['date_added']))
            {
               $final[$key]['date_added'] = date('d.m.Y',$val['date_added']); 
            }
            $final[$key]['actions'] = '<a href="'.URL::base().'catalog/edit/'.$val['catalog_id'].'" class="btn btn-primary btn-circle EditCatalog" type="button"><i class="fa fa-edit"></i></a>&nbsp;<button data-id="'.$val['catalog_id'].'" class="btn btn-danger btn-circle DeleteCatalog" type="button"><i class="fa fa-remove"></i></button>';
            
        }   

            return $final;

    }
    
}

