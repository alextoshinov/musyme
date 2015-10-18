<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Audiobooks extends Controller_Mainapp {
    
    public $auth_required = false; //Auth is required to access this controller


    public function before() {
        parent::before();
        $this->template->title = __('Audiobooks');
        $this->template->active = 'audiobooks';        
    }
    //
        public function action_index()
    {
        $language_id = Model_Languages::getLangIdByAbbr($this->current_lang);
        $catalogs = Model_Catalogs::listAll(1,$language_id);
        $view = $this->template->content = View::factory ( 'audiobooks' )
                ->set('lang',$this->current_lang)
                ->set('catalogs', $catalogs);
        $this->response->body($view);
    }
}
