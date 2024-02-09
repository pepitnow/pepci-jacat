<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		// API Doc page only accessible during development/testing environments
		// if (in_array(ENVIRONMENT, array('development', 'testing')))
		// {
			$this->mBodyClass = 'swagger-section';
			$this->add_script('assets/api/lib/jsoneditor.min.js',true,'head');
			$this->add_script('assets/api/lib/marked.js',true,'head');
			$this->add_script('assets/api/lib/underscore-min.js',true,'head');
			$this->add_script('assets/api/lib/jquery-1.8.0.min.js',true,'head');
			$this->add_script('assets/api/lib/backbone-min.js',true,'head');
			$this->add_script('assets/api/lib/handlebars-2.0.0.js',true,'head');
			$this->add_script('assets/api/swagger-ui.js',true,'head');
			$this->add_stylesheet('assets/api/css/reset.css');
			$this->add_stylesheet('assets/api/css/print.css');
			$this->add_stylesheet('assets/api/css/screen.css');
			$this->add_stylesheet('assets/api/css/style.css');
			$this->add_stylesheet('assets/api/css/typography.css');

			$this->mScripts['foot'] = [];
			$this->render('home', 'empty');			
		// }
		// else
		// {
		// 	redirect();
		// }
	}
}
