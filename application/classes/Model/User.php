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
            $users = ORM::factory('User');
            

            if($searchField != "" AND $searchValue != "")
            {
                $searchValueFinal = "";
                $compareFinal = "=";

                switch($searchValue)
                {
                    case "null":
                            $searchValueFinal = "";
                        break;
                    default:
                        $searchValueFinal = $searchValue;
                        break;
                }

                switch($type)
                {
                    case "like":
                        $compareFinal = "LIKE";
                        $searchValueFinal = "%".$searchValueFinal."%";
                        break;
                    case "equal":
                        $compareFinal = "=";
                        break;
                    case "notequal":
                        $compareFinal = "<>";
                        break;
                    case "bigger":
                        $compareFinal = ">";
                        break;
                    case "less":
                        $compareFinal = "<";
                        break;
                    case "biggerequal":
                        $compareFinal = ">=";
                        break;
                    case "lessequal":
                        $compareFinal = "<=";
                        break;
                    default:
                        $compareFinal =  "=";
                        break;
                }
            }

        $users = $users->find_all();
        $final = array();
        $i = 1;
        foreach($users as $key=>$val)
        {
            $final[$val->id] = $val->as_array();
            $final[$val->id]['is_admin'] = 'YES';
            $final[$val->id]['actions'] = '<a href="'.URL::base().'dashboard/editUser/'.$val->id.'" class="btn btn-primary btn-circle EditUser" type="button"><i class="fa fa-edit"></i></a>&nbsp;<button data-id="'.$val->id.'" class="btn btn-danger btn-circle DeleteUser" type="button"><i class="fa fa-remove"></i></button>';
            $i++;
        }

        return $final;

    }

}