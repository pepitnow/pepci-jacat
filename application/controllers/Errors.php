<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Override 404 error
 */
class Errors extends MY_Controller {

	public function error_404()
	{
		$this->output->set_status_header('404');
		$this->mTitle = $this->lang->language["error_404_title"];
		$data['error_code']=404;
		$data['error_message']=$this->lang->language["error_404"];
		$this->load->vars($data);
		$this->render('errors/custom/error_generic');
	}
}