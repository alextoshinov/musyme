<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends Model_Auth_User {

  public function filters()
  {
    return array(
      'username' => array(
        array('trim'),
        array('htmlspecialchars')
      ),
      'password' => array(
        array('trim'),
        array('htmlspecialchars'),
        array(array(Auth::instance(), 'hash'))
      ),
      'email' => array(
        array('trim'),
        array('htmlspecialchars'),
        array('strtolower')
      )
    );
  }
  //
  public static function getUsers($searchField, $searchValue, $type = 'like')
    {
        $users = ORM::factory('User')->find_all();
        $usersArr = array();
        $role_admin = new Model_Role( array( 'name' => 'admin' ) );
        $final = array();
        $i = 1;
        foreach($users as $val)
        {            
            $final[$val->id] = $val->as_array();
        }
        foreach($final as $k=>$v)
        {
            $usersArr[$k] = $v;
            $usersArr[$k]['last_login'] = ($v['last_login'] == null) ? '': date('d.m.Y',$v['last_login']);
            $usersArr[$k]['actions'] = '<a href="'.URL::base().'dashboard/editUser/'.$v['id'].'" class="btn btn-primary btn-circle EditUser" type="button"><i class="fa fa-edit"></i></a>&nbsp;<button data-id="'.$v['id'].'" class="btn btn-danger btn-circle DeleteUser" type="button"><i class="fa fa-remove"></i></button>';;
        }
        return $usersArr;

    }
    //
    public static function getRoles($user)
    {
        if($user == "all")
        {
            $roles = ORM::factory('Roles')->find_all();
        }
        else
        {
            $roles = ORM::factory('RolesUsers')
                ->where("user_id","=",$user)
                ->find_all();
        }

        $final = array();
        $i = 1;
        foreach($roles as $key=>$val)
        {
            $final[] = $val->as_array();
            $i++;
        }

        return $final;
    }
    //
    public static function checkUserRoles($user_id, $role_id)
    {
        $roles = ORM::factory('RolesUsers')
            ->where("user_id","=",$user_id)
            ->where("role_id","=",$role_id)
            ->find_all();
        $final = array();
        foreach($roles as $val)
        {
            $final[] = $val->as_array();
        }
        if(COUNT($final) == 0)
        {
            return false;
        } else {
            return true;
        }
    }
    //
    public static function addUserRoles($user_id, $role_id)
    {
        $roles = ORM::factory('RolesUsers')
            ->where("user_id","=",$user_id)
            ->where("role_id","=",$role_id)
            ->find_all();
        $final = array();
        foreach($roles as $val)
        {
            $final[] = $val->as_array();
        }
        if(COUNT($final) == 0)
        {
            $roles = ORM::factory('RolesUsers');
            $roles->user_id = $user_id;
            $roles->role_id = $role_id;
            try
            {
                if($roles->save()){
                    return true;
                }
            }
            catch (ORM_Validation_Exception $e)
            {
                return false;
            }
        }
    }
    //
    public static function deleteUserRoles($user_id, $role_id)
    {
        $query = DB::delete('roles_users')->where("user_id","=",$user_id)
            ->where("role_id","=",$role_id);
        $result = $query->execute();
        return $result;
    }
    //
    public static function getUserById($id)
    {
        $user = ORM::factory('User')->where('id','=',$id)->find()->as_array();
        return $user;
    }
    //
    public static function editUser($varsArray, $user_id)
    {
        $query = DB::update('users')->set($varsArray)->where('id','=',$user_id)->execute();
        return $query;
    }
    //
    public static function addUser($userArr)
    {
        $result = ORM::factory('Users');
        $result->values($userArr);
        $result->save();
        if($result->saved())
        {
            return $result->pk();
        } else {
            return false;
        }
    }
    //
    public static function checkEmailExists($email)
    {
    	$user = ORM::factory('User')->where('email','=',$email)->find();

    	if(!empty($user->id))
    	{
            return true;
    	} else {
            return false;
    	}
        //
        return false;
    }
    //
    public static function checkUsernameExists($username)
    {
    	$user = ORM::factory('User')->where('username','=',$username)->find();

    	if(!empty($user->id))
    	{
            return true;
    	} else {
            return false;
    	}
        //
        return false;
    }
    //
    /**
     * <Delete user>
     * @author Alex Toshinov <alex.toshinov@gmail.com>
     * @param $id
     * @return array
    */
    public static function deleteUser($id)
    {
        return DB::delete('users')->where('id', '=', $id)->limit(1)->execute();
    }    

}