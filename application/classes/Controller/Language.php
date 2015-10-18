<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Language extends Controller_Mainapp {

    public $auth_required = false;
    
    public function before() {
        parent::before(); 
        $this->languages = array();
        $languages = Model_Languages::listAll(); 
        foreach($languages as $l)
        {
            $this->languages[] = $l['abbr'];
        }
    }
    
    public function action_index()
    {
        if(Cookie::get('lang')){
            echo 'Current language: '.Cookie::get('lang').'<BR>';
        }
        echo __('Hello!').'<BR>';
        echo __('test message').'<BR>';
        foreach($this->languages as $ll)
        {
            echo HTML::anchor('language/changeto/'.$ll,$ll).' ';
        }

    }
    public function action_changeto()
    {
        $lang =  $this->request->param ( 'id' );
        if(!in_array($lang, $this->languages)) {
            $lang = 'bg';
        }
        Cookie::set('lang', $lang);
        I18n::lang($lang);
        $refferer = Request::$initial->referrer();
        $this->redirect ( $refferer);
    }
    
    public function action_changelangto()
    {
        $lang =  $this->request->param ( 'id' );
        if(!in_array($lang, $this->languages)) {
            $lang = 'bg';
        }
        Cookie::set('lang', $lang);
        I18n::lang($lang);
//        $updateArr = array(
//            'lang_of_communication' => $lang
//        );
//        Model_UserFunctions::updateUser($this->user->id,$updateArr);
        $refferer = Request::$initial->referrer();
        $this->redirect ( $refferer);
    }
}