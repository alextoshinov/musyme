<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mainapp extends Controller_Template {

    public $template = 'template/layout';
    public $auto_render = TRUE;
    public $auth_required = FALSE;
    public $secure_actions = FALSE;
    public $page_id = NULL;
    public $user = NULL;
    public $current_lang;
    public $base_url;
	//
    public function before() {

        try {
                $this->session = Session::instance();
        } catch(ErrorException $e) {
                session_destroy();
        }
        parent::before();

   
        if(Cookie::get('lang')){
            $this->current_lang = Cookie::get('lang');
                $languages = array('en','bg','de', 'ru', 'es', 'fr', 'nl');
                if(!in_array($this->current_lang, $languages))
                {
                $this->current_lang = 'bg';
            }
        }else{
            $this->current_lang = 'bg';
        }

        $this->user = Auth::instance()->get_user();

        if(isset($this->user->lang_of_communication))
        {
            I18n::lang($this->user->lang_of_communication);
            $this->current_lang = $this->user->lang_of_communication;
        }
        else
        {
            I18n::lang($this->current_lang);
        }

        View::set_global('user',$this->user);
        View::set_global('current_lang',$this->current_lang);
        $this->session = Session::instance();

        $action_name = $this->request->action();
        $secureCheck = FALSE;

        if((is_array($this->secure_actions) && array_key_exists($action_name, $this->secure_actions) && $this->secure_actions !== FALSE))
        {
            foreach($this->secure_actions[$action_name] as $val)
            {
                if(!$secureCheck AND Auth::instance()->logged_in($val))
                {
                    $secureCheck = TRUE;
                }
            }
        }
        else if((!is_array($this->secure_actions) || !array_key_exists($action_name, $this->secure_actions)))
        {
            $secureCheck = TRUE;
        }
        //
        if ($this->auth_required !== FALSE AND $secureCheck === FALSE)
        {
            if (Auth::instance()->logged_in()){
                $this->redirect('welcome');
            }else{
                $this->redirect('membership');
            }
        }
    


        if ($this->auto_render) {

            if ($this->template == NULL) {
                $this->template = 'template/layout';
            }

            $this->template->title   = '';
            $this->template->controler = '';
            $this->template->content = '';
            $this->template->active   = '';
            $this->template->current_lang = $this->current_lang;
            $this->template->styles = array();
            $this->template->scripts = array();

        }
    }

    public function after() {
       if ($this->auto_render === TRUE) {

          $this->request->response = $this->template;

          $styles = array();
          $scripts = array();

          $this->template->styles = array_merge( $this->template->styles, $styles );
          $this->template->scripts = array_merge( $this->template->scripts, $scripts );
       }
       parent::after();
    }

}


