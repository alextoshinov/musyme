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
            $this->template->show_logout = TRUE;
            $this->template->title = 'New user'; 
            $view = $this->template->content = View::factory('dashboard/users/new');
            $this->response->body($view);
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
                    $folderName = Model_Categories::getNameById($_POST['category_id']);
                    $filename = $this->_save_image($_FILES['image_name'], $folderName);
                }
                //
                $linkArr = array(
                            'url'=>$_POST['url'],
                            'source_id'=>$_POST['source_id'],
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
                    $folderName = Model_Categories::getNameById($_POST['category_id']);
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
                    $folderName = Model_Categories::getNameById($_POST['category_id']);
                    $filename = $this->_save_image($_FILES['image_name'], $folderName);
                }
                //
                $linkArr = array(
                            'url'=>$_POST['url'],
                            'source_id'=>$_POST['source_id'],
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
                    $this->redirect('dashboard/songs/edit/'.$pk);
            }

        $view->uploaded_file = $filename;
        $view->error_message = $error_message;
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
                    $folderName = Model_Categories::getNameById($_POST['category_id']);
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

}