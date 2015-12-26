<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dashboard extends Controller_Template_Admin {

	
        public function before()
	{
		parent::before();
		
		if (!Auth::instance()->logged_in('admin'))
		{
                    $this->redirect('account/login');
		}
                
		$this->template->loged = TRUE;
	}
	

	public function action_index()
	{
		// display
		$this->template->show_logout = TRUE;
		$this->template->title = 'Dashboard';
		$count_movies = Model_Links::countLinks(1);
		$count_songs = Model_Links::countLinks(2);
		$this->template->content = View::factory('dashboard/dashboard')
				->set('count_movies', $count_movies)
				->set('count_songs', $count_songs)
				;
	}
	
	

	public function action_logout()
	{
		// log user out
		Auth::instance()->logout();
		// redirect to login page
		$this->redirect('account/login');
	}

	public function action_movies()
	{
		$this->template->show_logout = TRUE;
		$this->template->title = 'Movies';
		$this->template->content = View::factory('dashboard/movies');
	}

	public function action_getMovies()
	{
            $this->auto_render = FALSE;
		$links = Model_Links::getAllLinks(1);
		$final['data'] = array();
		//
		foreach($links as $val)
		{
                    $final['data'][] = $val;
		}
		//
		print(json_encode($final));
	}
        
        public function action_getSongs()
	{
            $this->auto_render = FALSE;
		$links = Model_Links::getAllLinks(2);
		$final['data'] = array();
		//
		foreach($links as $val)
		{
                    $final['data'][] = $val;
		}
		//
		print(json_encode($final));
	}
        
        public function action_getAgegroup()
        {
            $this->auto_render = FALSE;
		$agegroup = Model_Agegroup::getAll();
		$final['data'] = array();
		//
		foreach($agegroup as $val)
		{
                    $final['data'][] = $val;
		}
		//
		print(json_encode($final));
        }

        public function action_getUsers()
	{
            $this->auto_render = FALSE;
            $users = Model_User::getUsers("","");
		$final['data'] = array();
		//
		foreach($users as $val)
		{
                    $final['data'][] = $val;
		}
		//
		print(json_encode($final));
	}

	public function action_songs()
	{
		$this->template->show_logout = TRUE;
		$this->template->title = 'Songs';
		$this->template->content = View::factory('dashboard/songs');
	}

	public function action_users()
	{
		$this->template->show_logout = TRUE;
		$this->template->title = 'Users';
		$this->template->content = View::factory('dashboard/users');
	} 
        //
        public function action_newUser()
	{
//            echo '<pre>'; print_r($_POST); exit;
            // form post handling
		if (isset($_POST) && Valid::not_empty($_POST)) {
			
			// validate
			$post = Validation::factory($_POST)
			->rule('email', 'not_empty')
			->rule('email', 'email')
			->rule('email', 'email_domain')
			->rule('username', 'not_empty')
			->rule('username', Kohana::$config->load('musyme.account.create.username.format'))
			->rule('username', 'min_length', array(':value', Kohana::$config->load('musyme.account.create.username.min_length')))
			->rule('username', 'max_length', array(':value', Kohana::$config->load('musyme.account.create.username.max_length')))
			->rule('password', 'not_empty')
			->rule('password', 'min_length', array(':value', Kohana::$config->load('musyme.account.create.password.min_length')))
			->rule('password', array($this, 'pwdneusr'), array(':validation', ':field', 'username'));
					
			if ($post->check()) {
				// save
				$model = ORM::factory('User');
				$model->values(array(
					'email'		=> $post['email'],
					'username' 	=> HTML::entities(strip_tags($post['username'])),
					'password'	=> $post['password'],
				));
				try {
					$model->save();
					
					$model->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());
					$model->add('roles', ORM::factory('Role')->where('name', '=', 'participant')->find());
					$this->redirect('dashboard/users');
					
				}
				catch (ORM_Validation_Exception $e) {
					$errors = $e->errors('user');
				}
			} else {
				$errors = $post->errors('user');
			}
		}
		
		// TODO i18n
		$this->template->title = __('Create an account');
		
		// display
		$this->template->content = View::factory('dashboard/users/new')
		->bind('post', $post)
		->bind('errors', $errors);

        }
        //
        // check if username is available
	// call by ajax
	public function action_checkusername()
	{
		if ($this->request->is_ajax()) {
			$this->auto_render = FALSE;

			if(!ORM::factory('User')->unique_key_exists($_POST['username'])) {
				echo json_encode(array('available' => 1));
			} else {
				echo json_encode(array('available' => 0));
			}
		}
	}
	
	
	// validation rule: password != username
	static function pwdneusr($validation, $password, $username)
	{
		if ($validation[$password] === $validation[$username])
		{
			$validation->error($password, 'pwdneusr');
		}
	}
	
	
	//validation rule: password exist
	static function pwdexist($validation, $email)
	{
		if(!ORM::factory('user')->unique_key_exists($validation[$email])) {
			$validation->error($email, 'emailexistnot');
		}
	}
	
	
	// generate token
	static function generate_token($length = 8)
	{
		// start with a blank password
		$password = "";
		// define possible characters (does not include l, number relatively likely)
		$possible = "123456789abcdefghjkmnpqrstuvwxyz123456789";
		// add random characters to $password until $length is reached
		for ($i = 0; $i < $length; $i++) {
			// pick a random character from the possible ones
			$char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
			$password .= $char;
		}
		return $password;
	}
        //
        public function action_editUser()
	{            
            $this->template->show_logout = TRUE;
            $this->template->title = 'Edit user'; 
            $id = $this->request->param('id');
            
            $id = isset($_POST['id']) ? $_POST['id']:$id;
            $user = Model_User::getUserById($id);
            
            $errors = array();
            if($_POST)
            {
                if(isset($_POST['role']))
                {
                    unset($_POST['role']);
                }
                //
                if($user['email'] == $_POST['email'])
                {
                    unset($_POST['email']);
                } else if(Model_User::checkEmailExists($_POST['email']))
                {
                    $errors[] = 'E-mail address is taken!';
                }
                //
                if($user['username'] == $_POST['username'])
                {
                    unset($_POST['username']);
                }
                else if(Model_User::checkUsernameExists($_POST['username']))
                {
                    $errors[] = 'Username is taken!';
                }
                //
                if($_POST['password'] == '')
                {
                    unset($_POST['password']);
                } else {
                    $_POST['password'] = Auth::instance()->hash_password($_POST['password']);
                }                
                //
                
                if(empty($errors))
                {
                    Model_User::editUser($_POST, $_POST['id']);
                    $this->redirect('dashboard/users');
                } else {
                    $user = Model_User::getUserById($_POST['id']);
                }
                
            }
            $view = $this->template->content = View::factory('dashboard/users/edit')
                    ->set('errors',$errors)
                    ->set('user', $user);
            $this->response->body($view);
        }
        //
        
        public function action_deleteUser()
        {
            $this->auto_render = FALSE;
            $this->template->show_logout = TRUE;
            $this->template->title = 'Delete user'; 
            $id = $this->request->param('id');
            $r = Model_User::deleteUser($id);
            if($r) {
                print 'success';
            } else {
                print 'error';
            }
        }
        //
        public function action_newMovie()
	{
            $this->template->show_logout = TRUE;
            $this->template->title = 'New movie'; 
            $view = $this->template->content = View::factory('dashboard/movies/new');
            $error_message = NULL;
            $filename = NULL;
            $pk = FALSE;
//            echo '<pre>'; print_r($_POST);exit;
            if ($this->request->method() == Request::POST)
            {
                if (isset($_FILES['image_name']))
                {
                    $folderName = $_POST['catalog_id'];
                    $filename = $this->_save_image($_FILES['image_name'], $folderName);
                }
                //
                $linkArr = array(
                            'url'=>$_POST['url'],
                            'source_id'=>$_POST['source_id'] != 0 ? $_POST['source_id']:1,
                            'title'=>$_POST['title'],
                            'catalog_id' => $_POST['catalog_id'],
                            'image_name'=>$_FILES['image_name']['name'],
                            'language_id'=>$_POST['language_id'],
                            'user_id'=>Auth::instance()->get_user()->id,
                            'agegroup_id'=>$_POST['agegroup_id'],
                            'date_added'=>time(),
                            'is_public'=>$_POST['is_public']
                            );
                //
                $pk = Model_Links::addLink($linkArr);
            }
 
            if ( ! $filename)
            {
                $error_message = 'There was a problem while uploading the image.
                    Make sure it is uploaded and must be JPG/PNG/GIF file and recommended size:540x360px';
            }
            if($pk)
            {
                    $this->redirect('dashboard/movies/edit/'.$pk);
            }

        $view->uploaded_file = $filename;
        $view->error_message = $error_message;
        $this->response->body($view);
            
	}
        //
        public function action_editmovies()
        {
            $link_id = $this->request->param('id');
            $this->template->show_logout = TRUE;
            $this->template->title = 'Movie::Edit';
            $movie = Model_Links::getLinkById($link_id); 
            $view = $this->template->content = View::factory('dashboard/movies/edit')
                    ->set('movie',$movie);
            if ($this->request->method() == Request::POST)
            {
                if (isset($_FILES['image_name']))
                {
                    $folderName = $_POST['catalog_id'];
                    $filename = $this->_save_image($_FILES['image_name'], $folderName);
                }                
                //
                $linkArr = array(
                            'url'=>$_POST['url'],
                            'title'=>$_POST['title'],
                            'source_id'=>$_POST['source_id'],
                            'catalog_id'=>$_POST['catalog_id'],
                            'language_id'=>$_POST['language_id'],
                            'user_id'=>Auth::instance()->get_user()->id,
                            'agegroup_id'=>$_POST['agegroup_id'],
                            'date_added'=>time(),
                            'is_public'=>$_POST['is_public']
                            );
                //
                if(isset($_FILES['image_name']['name']) && !empty($_FILES['image_name']['name']))
                {
                    $linkArr['image_name'] = $_FILES['image_name']['name'];
                }
               
                //
                Model_Links::editLink($linkArr, $_POST['link_id']);
                if ( ! $filename)
                {
                    $error_message = 'There was a problem while uploading the image.
                        Make sure it is uploaded and must be JPG/PNG/GIF file and recommended size:540x360px';
                }
 		if($_POST['link_id'])
 		{
 			$this->redirect('dashboard/editmovies/'.$_POST['link_id']);
 		}
            }
            $view->uploaded_file = isset($filename) ? $filename:$movie[0]['image_name'];
            $view->error_message = isset($error_message) ? $error_message:'';
            $this->response->body($view);
        }
        //
        public function action_deleteMovie()
        {
            $this->auto_render = FALSE;
            $link_id = $this->request->param('id');
            $result = Model_Links::deleteLink($link_id);
            if($result)
            {
                print 'success';
            } else {
                print 'error';
            }
        }
        //
        public function action_newAgegroup()
        {
            $this->template->show_logout = TRUE;
            $this->template->title = 'New age group'; 
            $view = $this->template->content = View::factory('dashboard/agegroup/new');
            $error_message = NULL;
            $pk = FALSE;
            if ($this->request->method() == Request::POST)
            {
                $ageArr = array(
                            'title'=>$_POST['title'],
                            'description' => $_POST['description'],                            
                            'is_public'=>$_POST['is_public']
                            );
                //
                $pk = Model_Agegroup::addAgegroup($ageArr);
            }
            if($pk)
            {
                $this->redirect('dashboard/editagegroup/'.$pk);
            }

        $view->error_message = $error_message;
        $this->response->body($view);
        }
        //
        public function action_newSong()
	{
            $this->template->show_logout = TRUE;
            $this->template->title = 'New song'; 
            $view = $this->template->content = View::factory('dashboard/songs/new');
            $error_message = NULL;
            $filename = NULL;
            $pk = FALSE;
//            echo '<pre>'; print_r($_POST);exit;
            if ($this->request->method() == Request::POST)
            {
                if (isset($_FILES['image_name']))
                {
                    $folderName = $_POST['catalog_id'];
                    $filename = $this->_save_image($_FILES['image_name'], $folderName);
                }
                //
                $linkArr = array(
                            'url'=>$_POST['url'],
                            'source_id'=> $_POST['source_id'] != 0 ? $_POST['source_id']:1,
                            'title'=>$_POST['title'],
                            'catalog_id' => $_POST['catalog_id'],
                            'image_name'=>$_FILES['image_name']['name'],
                            'language_id'=>$_POST['category_id'],
                            'user_id'=>Auth::instance()->get_user()->id,
                            'agegroup_id'=>$_POST['agegroup_id'],
                            'date_added'=>time(),
                            'is_public'=>$_POST['is_public']
                            );
                //
                $pk = Model_Links::addLink($linkArr);
            }
 
            if ( ! $filename)
            {
                $error_message = 'There was a problem while uploading the image.
                    Make sure it is uploaded and must be JPG/PNG/GIF file.';
            }
            if($pk)
            {
                    $this->redirect('dashboard/editsongs/'.$pk);
            }

        $view->uploaded_file = $filename;
        $view->error_message = $error_message;
        $this->response->body($view);
            
	}
        //
        public function action_editAgegroup()
        {
            $id = $this->request->param('id');
            $this->template->show_logout = TRUE;
            $this->template->title = 'Age group::Edit';
            $agegroup = Model_Agegroup::getAgegroupById($id); 
            $view = $this->template->content = View::factory('dashboard/agegroup/edit')
                    ->set('agegroup',$agegroup);
            if ($this->request->method() == Request::POST)
            {
                               
                //
                $ageArr = array(
                            'title'=>$_POST['title'],
                            'description'=>$_POST['description'],                            
                            'is_public'=>$_POST['is_public']
                            );
                //
                Model_Agegroup::editAgegroup($ageArr, $_POST['id']);
                //
 		if($_POST['id'])
 		{
                    $this->redirect('dashboard/editagegroup/'.$_POST['id']);
 		}
            }
            $this->response->body($view);
        }
        //
        public function action_editsongs()
        {
            $link_id = $this->request->param('id');
            $this->template->show_logout = TRUE;
            $this->template->title = 'Song::Edit';
            $song = Model_Links::getLinkById($link_id); 
            $view = $this->template->content = View::factory('dashboard/songs/edit')
                    ->set('song',$song);
            if ($this->request->method() == Request::POST)
            {
                if (isset($_FILES['image_name']))
                {
                    $folderName = $_POST['catalog_id'];
                    $filename = $this->_save_image($_FILES['image_name'], $folderName);
                }                
                //
                $linkArr = array(
                            'url'=>$_POST['url'],
                            'title'=>$_POST['title'],
                            'source_id'=>$_POST['source_id'],
                            'catalog_id'=>$_POST['catalog_id'],
                            'language_id'=>$_POST['language_id'],
                            'user_id'=>Auth::instance()->get_user()->id,
                            'agegroup_id'=>$_POST['agegroup_id'],
                            'date_added'=>time(),
                            'is_public'=>$_POST['is_public']
                            );
                //
                if(isset($_FILES['image_name']['name']) && !empty($_FILES['image_name']['name']))
                {
                    $linkArr['image_name'] = $_FILES['image_name']['name'];
                }
               
                //
                Model_Links::editLink($linkArr, $_POST['link_id']);
                if ( ! $filename)
                {
                    $error_message = 'There was a problem while uploading the image.
                        Make sure it is uploaded and must be JPG/PNG/GIF file.';
                }
 		if($_POST['link_id'])
 		{
 			$this->redirect('dashboard/editsongs/'.$_POST['link_id']);
 		}
            }
            $view->uploaded_file = isset($filename) ? $filename:$song[0]['image_name'];
            $view->error_message = isset($error_message) ? $error_message:'';
            $this->response->body($view);
        }
        //
        public function action_deleteAgegroup()
        {
            $this->auto_render = FALSE;
            $id = $this->request->param('id');
            $result = Model_Agegroup::deleteAgegroup($id);
            if($result)
            {
                print 'success';
            } else {
                print 'error';
            }
        }
        //
        public function action_deleteSong()
        {
            $this->auto_render = FALSE;
            $link_id = $this->request->param('id');
            $result = Model_Links::deleteLink($link_id);
            if($result)
            {
                print 'success';
            } else {
                print 'error';
            }
        }
        //
        protected function _save_image($image, $folderName)
        {
            if (
                ! Upload::valid($image) OR
                ! Upload::not_empty($image) OR
                ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
            {
                return FALSE;
            }

            $directory = DOCROOT.'assets/images/'.$folderName;
            if(!is_dir($directory))
            {
                mkdir($directory, 0777);
            }

            if ($file = Upload::save($image, $image['name'], $directory))
            {
    //            $filename = strtolower(Text::random('alnum', 20)).'.jpg';

                Image::factory($file)
    //                ->resize(200, 200, Image::AUTO)
                    ->save($directory.$image['name']);

                // Delete the temporary file
    //            unlink($file);

                return $image['name'];
            }

            return FALSE;
        }
	//
        public function action_checkEmailExists()
        {
            $this->auto_render = false;
            $email =  $_REQUEST['email'];
            //
            if(!Model_User::checkEmailExists($email))
            {
                echo 'true';
            }
            else
            {
                echo 'false';
            }
        }
        //
        public function action_checkUsernameExists()
        {
            $this->auto_render = false;
            $username =  $_REQUEST['username'];
            //
            if(!Model_User::checkUsernameExists($username))
            {
                echo 'true';
            }
            else
            {
                echo 'false';
            }
        }
        //
        public function action_agegroup()
        {
            $this->template->show_logout = TRUE;
            $this->template->title = 'Age group';
            $this->template->content = View::factory('dashboard/agegroup');
        }
        //
        public function action_getCatalogs()
        {
            $this->auto_render = false;
            $language_id = $this->request->param('id');
            $category_id = $this->request->param('helpid');
            print Helper_Catalogs::selectCatalogs ($category_id,  $language_id);
        }
        //
}