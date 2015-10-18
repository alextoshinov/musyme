<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Catalog extends Controller_Template_Admin 
{
	public function before()
	{
		parent::before();
		
		if (!Auth::instance()->logged_in('admin'))
		{
			$this->redirect('account/login');
		}

		$this->template->loged = TRUE;
	}
	//
	public function action_index ()
	{
		$this->template->show_logout = TRUE;
		$this->template->title = 'Catalog';                
		$view = $this->template->content = View::factory('catalog/index')
	//			->set('catalog', $catalog)
		;
		$this->response->body($view);
	}
	//
	public function action_getCatalogs()
	{
		$this->auto_render = FALSE;
		$catalog = Model_Catalogs::getAll();
		$final['data'] = array();
		//
		foreach($catalog as $val)
		{
            $final['data'][] = $val;
		}
		//
		print(json_encode($final));
	}
	//
	public function action_edit ()
	{
		$catalog_id = $this->request->param('id');
		$this->template->show_logout = TRUE;
		$this->template->title = 'Catalog::Edit';
		$catalog = Model_Catalogs::getCatalogById($catalog_id);                
		$view = $this->template->content = View::factory('catalog/edit')->set('catalog',$catalog);
                
		$this->response->body($view);
	}
	//
        public function action_update()
        {

            if ($this->request->method() == Request::POST)
            {
                if (isset($_FILES['image_name']))
                {
                    $filename = $this->_save_image($_FILES['image_name']);
                }
                
                //
                $catalogArr = array(
                            'name'=>$_POST['name'],
                            'category_id'=>$_POST['category_id'],
                            'language_id'=>$_POST['language_id'],
                            'user_id'=>Auth::instance()->get_user()->id,
                            'agegroup_id'=>$_POST['agegroup_id'],
                            'date_added'=>time(),
                            'is_public'=>$_POST['is_public']
                            );
                //
                if(isset($_FILES['image_name']['name']) && !empty($_FILES['image_name']['name']))
                {
                    $catalogArr['image_name'] = $_FILES['image_name']['name'];
                }
               
                //
                Model_Catalogs::editCatalog($catalogArr, $_POST['catalog_id']);
                if ( ! $filename)
                {
                    $error_message = 'There was a problem while uploading the image.
                        Make sure it is uploaded and must be JPG/PNG/GIF file.';
                }
 		if($_POST['catalog_id'])
 		{
 			$this->redirect('catalog/edit/'.$_POST['catalog_id']);
 		}
            }
        }
        //
        public function action_delete () 
        {
            $this->auto_render = FALSE;
            $id = $this->request->param('id');
            $result = Model_Catalogs::deleteCatalog($id);
            if($result)
            {
                print 'success';
            } else {
                print 'error';
            }
        }
        //
	public function action_new ()
	{	
            $this->template->show_logout = TRUE;
            $this->template->title = 'Catalog::New';                
            $view = $this->template->content = View::factory('catalog/new');
            $error_message = NULL;
            $filename = NULL;
            $pk = FALSE;
        
 
            if ($this->request->method() == Request::POST)
            {
                if (isset($_FILES['image_name']))
                {
                    $filename = $this->_save_image($_FILES['image_name']);
                }
                //
                $catalogArr = array(
                            'name'=>$_POST['name'],
                            'category_id'=>$_POST['category_id'],
                            'image_name'=>$_FILES['image_name']['name'],
                            'language_id'=>$_POST['category_id'],
                            'user_id'=>Auth::instance()->get_user()->id,
                            'agegroup_id'=>$_POST['agegroup_id'],
                            'date_added'=>time(),
                            'is_public'=>$_POST['is_public']
                            );
                //
                $pk = Model_Catalogs::addCatalog($catalogArr);
            }
 
            if ( ! $filename)
            {
                $error_message = 'There was a problem while uploading the image.
                    Make sure it is uploaded and must be JPG/PNG/GIF file.';
            }
            if($pk)
            {
                    $this->redirect('catalog/edit/'.$pk);
            }

        $view->uploaded_file = $filename;
        $view->error_message = $error_message;
        $this->response->body($view);

	}
	//
	protected function _save_image($image)
    {
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }
 
        $directory = DOCROOT.'assets/images/catalogs';
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