<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Movies extends Controller_Mainapp {
    
    public $auth_required = false; //Auth is required to access this controller


    public function before() {
        parent::before();
        $this->template->title = __('Movies');
        $this->template->active = 'movies';        
    }
    //
    public function action_index()
    {
        $language_id = Model_Languages::getLangIdByAbbr($this->current_lang);
        $catalogs = Model_Catalogs::listAll(1,$language_id);
        $view = $this->template->content = View::factory ( 'movies' )
                ->set('lang',$this->current_lang)
                ->set('catalogs', $catalogs);
        $this->response->body($view);
    }
    //
    public function action_view()
    {
        //GET parameters
        $catalog_id = $this->request->param('id');
        $language_id = $this->request->param('helpid');
        //
        $gallery = Model_Links::getLinks($catalog_id, $language_id);
        //
        $view = $this->template->content = View::factory ( 'gallery' )
                ->set('gallery', $gallery);
        $this->response->body($view);
    }
}