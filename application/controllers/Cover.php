<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

/**
 * 
 */
class Cover extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		
		$this->load->view('view_kesiswaan');
	}

	
}

?>