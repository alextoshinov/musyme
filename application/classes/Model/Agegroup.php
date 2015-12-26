<?php
/**
 * Languages class.
 * @package    Age group
 * @category   Model
 * @author     Alex Toshinov
 * @copyright  (c) 2015 Alex Web design http://a-w-d.biz
 * @license    http://kohanaframework.org/license
 */
class Model_Agegroup extends ORM
{
    protected $_table_name = 'age_group';
    //
    public static function getAllSelect ($is_public)
    {
        $agegroup = DB::select()
                ->from('age_group')
                ->where('is_public', '=', $is_public)
                ->execute()
                ;
        //
        $agegroupVar = $agegroup;
        $final = array();

        foreach($agegroupVar as $key => $val)
        {
            $final[$key] = $val;           
        }
        return $final;
    }
    //
    public static function getAll()
    {
        $agegroup = DB::select()
                ->from('age_group')
                ->execute()
                ;
        //
        $agegroupVar = $agegroup;
        $final = array();

        foreach($agegroupVar as $key => $val)
        {
            $final[$key] = $val;
            $final[$key]['actions'] = '<a href="'.URL::base().'dashboard/editagegroup/'.$val['id'].'" class="btn btn-primary btn-circle EditAgegroup" type="button"><i class="fa fa-edit"></i></a>&nbsp;<button data-id="'.$val['id'].'" class="btn btn-danger btn-circle DeleteAgegroup" type="button"><i class="fa fa-remove"></i></button>';
        }
        return $final;
    }
    //
    public static function addAgegroup($ageArr)
    {
        $result = ORM::factory('Agegroup');
        $result->values($ageArr);
        $result->save();
        if($result->saved())
        {
            return $result->pk();
        } else {
            return false;
        }
    }
    //
    public static function getAgegroupById($id)
    {
        $agegroup = DB::select()
                ->from('age_group')
                ->where('id', '=', $id)                
                ->execute()
                ;
        
        $final = array();
        //
        foreach($agegroup as $age)
        {
            $final[] = $age;
        }
        return $final;
    }
    //
    public static function editAgegroup($varsArray, $id)
    {
        $query = DB::update('age_group')->set($varsArray)->where('id','=',$id)->execute();
    }
    //
    public static function deleteAgegroup($id)
    {
        return $query = DB::delete('age_group')->where('id', '=', $id )->execute();
    }
    //
}
