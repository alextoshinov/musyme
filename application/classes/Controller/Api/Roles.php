<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_Roles extends RESTful_Controller {
    
    public function before() {
        if(!Auth::instance()->logged_in())
        {
             exit;
        }
    }

    public function action_get()
    {
        $user = $this->request->param('id');
        $searchField = $this->request->param('searchField');
        $searchValue = $this->request->param('searchValue');
        $type = $this->request->param('searchType');
        $final = Model_User::getRoles($user, $searchField, $searchValue,$type);

        print(json_encode($final, JSON_FORCE_OBJECT));
    }

    public function action_update()
    {


    }

    public function action_create()
    {
        $result = "nope";

            $user_id = $this->request->param('id');
            $role_id = $this->request->param('searchType');
            if(Model_User::addUserRoles($user_id,$role_id))
            {
                print 1;
            }

    }

    public function action_delete()
    {
        $user_id = $this->request->param('id');
        $role_id = $this->request->param('searchType');
        print(Model_User::deleteUserRoles($user_id,$role_id));
    }

} // End Welcome
