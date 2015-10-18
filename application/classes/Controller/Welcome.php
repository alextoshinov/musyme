<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Mainapp {

	public function before() {
            parent::before();
            $this->template->title = __('Home Page');
            $this->template->active = 'home';        
        }
	//
	public function action_index()
	{
            $language_id = Model_Languages::getLangIdByAbbr($this->current_lang);
            $catalogs = Model_Catalogs::listAll(1,$language_id);
            $view = $this->template->content = View::factory ( 'home' )
                    ->set('lang',$this->current_lang)
                    ->set('catalogs', $catalogs);
            $this->response->body($view);
	}

} // End Welcome
