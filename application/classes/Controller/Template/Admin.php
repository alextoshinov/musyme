<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template_Admin extends Controller_Template
{

	public $template = 'template/admin';

	/**
	 * The before() method is called before your controller action.
	 * In our template controller we override this method so that we can
	 * set up default values. These variables are then available to our
	 * controllers if they need to be modified.
	 */
	public function before()
	{
		parent::before();

		if ($this->auto_render)
		{
			// keep the last url if it's not home/language
			if(Request::current()->action() != 'language') {
				Session::instance()->set('controller', Request::current()->uri());
			}
			
			if (Auth::instance()->logged_in('participant'))
			{
				$this->template->loged = TRUE;
			}
			
			// Initialize empty values
			$this->template->title   = '';
			$this->template->content = '';
			
			$this->template->styles = array();
			$this->template->scripts = array(); 
		}
	}
	 
	/**
	 * The after() method is called after your controller action.
	 * In our template controller we override this method so that we can
	 * make any last minute modifications to the template before anything
	 * is rendered.
	 */
	public function after()
	{
		if ($this->auto_render)
		{
			$styles = array(
				'bower_components/bootstrap/dist/css/bootstrap.min.css' => 'screen',
				'bower_components/metisMenu/dist/metisMenu.min.css' => 'screen',
				'bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css' => 'screen',
				'bower_components/datatables-responsive/css/dataTables.responsive.css' => 'screen',
				'bower_components/font-awesome/css/font-awesome.min.css' => 'screen',
                                'bower_components/jquery.gritter/css/jquery.gritter.css' => 'screen',
			//	'assets/css/dropzone.css' => 'screen',
                'assets/css/musyme-admin.css' => 'screen',
                'assets/css/timeline.css' => 'screen',
			);

			$scripts = array(
				'bower_components/jquery/dist/jquery.min.js',
				'bower_components/bootstrap/dist/js/bootstrap.min.js',
				'bower_components/metisMenu/dist/metisMenu.min.js',
				'bower_components/datatables/media/js/jquery.dataTables.js',
				'bower_components/jquery-validation/dist/jquery.validate.js',
				'bower_components/jquery-validation/dist/additional-methods.min.js',
				'bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js',
				//'assets/js/dropzone.js',
                                'bower_components/jquery.gritter/js/jquery.gritter.min.js',
				'assets/js/musyme-admin.js',
			);
	
			$this->template->styles = array_merge( $this->template->styles, $styles );
			$this->template->scripts = array_merge( $this->template->scripts, $scripts );
		}
		parent::after();
	}
}