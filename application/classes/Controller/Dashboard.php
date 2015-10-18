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
		$links = Model_Users::
		$final['data'] = array();
		//
		foreach($links as $val)
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
        
        public function action_newMovie()
	{
            $this->template->show_logout = TRUE;
            $this->template->title = 'New movie'; 
            $view = $this->template->content = View::factory('dashboard/movies/new');
            $error_message = NULL;
            $filename = NULL;
            $pk = FALSE;
            echo '<pre>'; print_r($_POST);exit;
            if ($this->request->method() == Request::POST)
            {
                if (isset($_FILES['image_name']))
                {
                    $filename = $this->_save_image($_FILES['image_name']);
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

}