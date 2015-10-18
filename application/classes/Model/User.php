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

                if($EDI != "" AND $EDI != "all" )
                {
                    $users = $users->and_where($searchField,$compareFinal,$searchValueFinal);
                    if($searchField != 'status')
                    {
                        $users = $users->and_where('status','<>','refused');
                    }
                }
                else
                {
                    $users = $users->where($searchField,$compareFinal,$searchValueFinal);
                }

            }

        $users = $users->find_all();
        $final = array();
        $i = 1;
        foreach($users as $key=>$val)
        {
            $final[$val->id] = $val->as_array();
            $i++;
        }

        return $final;

    }

}