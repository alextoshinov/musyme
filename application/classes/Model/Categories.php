<?php
/**
 * Languages class.
 * @package    Languages
 * @category   Model
 * @author     Alex Toshinov
 * @copyright  (c) 2015 Alex Web design http://a-w-d.biz
 * @license    http://kohanaframework.org/license
 */
class Model_Categories extends ORM
{
    protected $_table_name = 'categories';
    //
    public static function getNameById($category_id)
    {
        $id = DB::select('name')
                ->from('categories')
                ->where('category_id', '=', $category_id)               
                ->execute()
                ->get('name')
                ;
        return $id;
    }
}
