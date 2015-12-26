<?php defined('SYSPATH') or die('No direct script access.');



class Controller_Profile extends Controller_Template_Admin {


    public $auth_required = TRUE; //Auth is required to access this controller
    public $user = NULL;
    public $secure_actions     = array(
        'index' => array('login'),
    		'changepassword' => array('login'),
    		'changeusername' => array('login'),
    );

    public function before() {
        parent::before();
        $this->user = Auth::instance()->get_user();
        $this->template->title = __('Unimasters User Profile');
        $this->template->active = 'profile';
    }



    public function action_index(){

        $view = $this->template->content = View::factory ( 'profile/home' );

    }

    public function action_changepassword(){

        $view = $this->template->content = View::factory ( 'dashboard/changepassword' );

    }
    
    public function action_changeusername(){
    
    	$view = $this->template->content = View::factory ( 'profile/changeusername' );
    
    }

    


    public function action_changepass(){

        $this->auto_render = false;
        $result = 'true';
        $settings = json_decode(file_get_contents("php://input"));
        if(!empty($settings))
        {
            $old = $settings[0];
            $password = $settings[1];
            $cpassword = $settings[2];


            $userInfo = ORM::factory('User')->where('id','=',$this->user->id)->and_where('password','=',Auth::instance()->hash_password($old))->find();

            if($password != $cpassword)
            {
                $result = 'error:match';
            }



            $userArr = $userInfo->as_array();
            if(isset($userArr['id']) AND !empty($userArr['id']))
            {
                if($password != NULL AND strlen($password)>=8){
                    $userInfo->password = $password;
                }
                else{
                    $result = 'error:short';
                }

                try
                {
                    if($result=='true' AND $userInfo->save()){
                        $result = 'ok';
                    }


                }
                catch (ORM_Validation_Exception $e)
                {
                    $result = 'error:while';

                }
            }
            else{
                $result = 'error:user';
            }
        }

        print $result;

    }
    
    
    public function action_changeuser(){
    
    	$this->auto_render = false;
    	$result = 'true';
    	$settings = json_decode(file_get_contents("php://input"));
    	if(!empty($settings))
    	{
    		$old = $settings[0];
    		$password = $settings[2];
    		$username = $settings[1];
    		
    		$userInfo = ORM::factory('User')
    		->where('id','=',$this->user->id)
    		->and_where('username','=',$old)
    		->and_where('password','=',Auth::instance()->hash_password($password))
    		->find();

    		
    		$userArr = $userInfo->as_array();
    		
    		
    		if(isset($userArr['id']) AND !empty($userArr['id']))
    		{
    			
    			$status = Model_UserFunctions::checkUsernameStatus($username);
    			 
    			if($status == 'false')
    			{
    				$result = 'error:match';
    			}
    			
    			if($username != NULL AND strlen($username)>=3){
    				$userInfo->username = $username;
    			}
    			else{
    				$result = 'error:short';
    			}
    
    			
    			
    			
    			try
    			{
    				if($result=='true' AND $userInfo->save()){
    					$result = 'ok';
    				}
    
    
    			}
    			catch (ORM_Validation_Exception $e)
    			{
    				$result = 'error:while';
    
    			}
    		}
    		else{
    			$result = 'error:user';
    		}
    	}
    
    	print $result;
    
    }

    public function action_changepassMobile(){

        $this->auto_render = false;
        $result = 'true';
        $settings = json_decode(file_get_contents("php://input"));
        if(!empty($settings))
        {
            $old = $settings[0];
            $password = $settings[1];
            $cpassword = $settings[2];
            $user_id =  $settings[3];

            $userInfo = ORM::factory('User')->where('id','=',$user_id)->and_where('password','=',Auth::instance()->hash_password($old))->find();

            if($password != $cpassword)
            {
                $result = 'error:match';
            }



            $userArr = $userInfo->as_array();
            if(isset($userArr['id']) AND !empty($userArr['id']))
            {
                if($password != NULL AND strlen($password)>=8){
                    $userInfo->password = Auth::instance()->hash_password($password);
                }
                else{
                    $result = 'error:short';
                }

                try
                {
                    if($userInfo->save()){
                        $result = 'ok';
                    }


                }
                catch (ORM_Validation_Exception $e)
                {
                    $result = 'error:while';

                }
            }
            else{
                $result = 'error:user';
            }
        }

        print $result;

    }

}