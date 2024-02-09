<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Site (by CI Bootstrap 3)
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views when calling 
| MY_Controller's render() function. 
|
| Each of them can be overrided from child controllers.
|
*/

require_once('main_menu.php');

// switch(ENVIRONMENT){
// 	case 'development':
// 		const $scripts=
// 	break;

// 	case 'testing':
// 	case 'production':
// 	break;
// }

$config['site'] = array(

	// Site name
	'name' => 'Pepci Jacat',

	// Default page title
	// (set empty then MY_Controller will automatically generate one based on controller / action)
	'title' => '',

	// Default meta data (name => content)
	'meta'	=> array(
		'author'		=> 'pepITnow! (https://pepitnow.com)',
		'description'	=> 'Pepci'
	),

	// Default scripts to embed at page head / end
	'scripts' => array(
		'head'	=> array(
		),
		'foot'	=> array(
			//'/assets/dist/app.min.js?v='. filemtime(APPPATH.'../assets/dist/app.min.js')
			'/assets/js/main.bundle.min.js?v='. filemtime(APPPATH.'../public/assets/js/main.bundle.min.js')
			//'assets/dist/bootstrap.min.js'
		),
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			'/assets/css/main.bundle.min.css'
			//'assets/dist/bootstrap.min.css'
		)
	),

	// Multilingual settings (set empty array to disable this)
	'multilingual' => array(
		// 'default'		=> 'es',			// to decide which of the "available" languages should be used
		// 'available'		=> array(			// availabe languages with names to display on site (e.g. on menu)
		// 	// 'en' => array(					// abbr. value to be used on URL, or linked with database fields
		// 	// 	'label'	=> 'English',		// label to be displayed on language switcher
		// 	// 	'value'	=> 'english',		// to match with CodeIgniter folders inside application/language/
		// 	// ),
		// 	'es' => array(
		// 		'label'	=> 'Español',
		// 		'value'	=> 'spanish',
		// 	),
		// ),
		// 'autoload'		=> array('general'),	// language files to autoload
	),

	// Google Analytics User ID (UA-XXXXXXXX-X)
	'ga_id' => '',
	
	// Menu items
	// (or directly update view file: applications/views/_partials/navbar.php)
	'menu' => $main_menu //see main_menu.php
		
	,

	// default page when redirect non-logged-in user
	'login_url' => 'auth/login',

	// restricted pages to specific groups of users, which will affect sidemenu item as well
	// pages out of this array will have no restriction
	'page_auth' => array(
		'account'		=> array('members')
	),

	// For debug purpose (available only when ENVIRONMENT = 'development')
	'debug' => array(
		'view_data'		=> FALSE,	// whether to display MY_Controller's mViewData at page end
		'profiler'		=> FALSE,	// whether to display CodeIgniter's profiler at page end
	),
);