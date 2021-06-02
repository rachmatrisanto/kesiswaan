<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

/**
 * 
 */
class Form extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		
		$this->load->view('view_form');
	}
}

?>