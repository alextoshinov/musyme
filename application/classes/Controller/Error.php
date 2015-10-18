<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Error extends Controller_Mainapp
{
    /**
     * All methods should be internal only, otherwise 404
     */
    public function before()
    {
        parent::before();

        // Get the HTTP status code
        $action = $this->request->action();

        if ($this->request->is_initial())
        {
            // This controller happens to exist, but lets pretent it does not
            $this->request->action($action = 404);
        }
        else if ( ! method_exists($this, 'action_'.$action))
        {
            // Return headers only
            $this->request->action('empty');
        }

        // Set the HTTP status code
        $this->response->status($action);
    }

    public function action_empty() {}
    
   
    public function action_404()
    {
        $view = $this->template->content = View::factory ( 'errors/404' );        
    }

    public function action_503()
    {
        $this->response->body('Maintenance Mode');
    }

    public function action_500()
    {
        $view = $this->template->content = View::factory ( 'errors/500' );
    }

} // End Controller_Error
