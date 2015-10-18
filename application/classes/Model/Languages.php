<?php
/**
 * Languages class.
 * @package    Languages
 * @category   Model
 * @author     Alex Toshinov
 * @copyright  (c) 2015 Alex Web design http://a-w-d.biz
 * @license    http://kohanaframework.org/license
 */
class Model_Languages extends ORM
{
    protected $_table_name = 'languages';
     /**
     * <Get all languages>
     * @author Alex Toshinov <alex.toshinov@gmail.com>
     * @param $is_public
     * @return array
    */
    public static function listAll($is_public = 1)
    {
        $languages = ORM::factory('Languages')
                ->where('is_public', '=', $is_public)
                ->and_where('abbr', '!=', '--')
                ->find_all()
                ;
        //
        $languagesVar = $languages;
        $final = array();

        foreach($languagesVar as $val)
        {
            $final[] = $val->as_array();
        }
        return $final;
    }
     /**
     * <Get language id by abbr>
     * @author Alex Toshinov <alex.toshinov@gmail.com>
     * @param $abbr
     * @return array
    */
    public static function getLangIdByAbbr($abbr = 'en')
    {
        $id = DB::select('language_id')
                ->from('languages')
                ->where('abbr', '=', $abbr)
                ->and_where('abbr', '!=', '--')
                ->execute()
                ->get('language_id')
                ;
        return $id;
    }
    
    public static function getLangIconById($language_id)
    {
        $id = DB::select('icon')
                ->from('languages')
                ->where('language_id', '=', $language_id)               
                ->execute()
                ->get('icon')
                ;
        return $id;
    }
    
}
