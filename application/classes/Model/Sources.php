<?php
/**
 * Sources class.
 * @package    Sources
 * @category   Model
 * @author     Alex Toshinov
 * @copyright  (c) 2015 Alex Web design http://a-w-d.biz
 * @license    http://kohanaframework.org/license
 */
class Model_Sources extends ORM
{
    protected $_table_name = 'sources';
    //
    /**
     * <Get all sources>
     * @author Alex Toshinov <alex.toshinov@gmail.com>
     * @param $source_id
     * @return array
    */
   public static function getAll ()
   {
       $sources = DB::select('source_id','name', 'url')
                ->from('sources')                
                ->execute()
                ;
        
        foreach($sources as $s)
        {
            $final[] = $s;
        }
        return $final;
   }


   public static function getProvider($source_id)
    {
        $final = array();
        $sources = DB::select('source_id','name', 'url')
                ->from('sources')
                ->where('source_id', '=', $source_id)
                ->execute()
                ;
        if(isset($sources) && !empty($sources))
        {
            foreach($sources as $s)
            {
                $final = array(
                    'source_id'=>$s['source_id'],
                    'name'=>$s['name'],
                    'url'=>$s['url']
                );
            }
            return $final;
        } else {
            return false;
        }    
    }
    
}

