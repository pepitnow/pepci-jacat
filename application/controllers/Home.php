<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->verify_login();

		// if(!$this->ion_auth->logged_in())
		// 	redirect($this->mSiteConfig['login_url'], 'refresh');

		$this->db->conn_id->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, true);
	}

	public function index()
	{
		$this->render('home');
	}
}
