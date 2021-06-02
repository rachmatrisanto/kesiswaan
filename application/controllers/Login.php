<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

class Login extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('login_model');
	}

	public function index(){	
		$this->load->view('view_login');
	}

	function aksi_login(){
		$tb_user='user';
		$username = $this->input->post('username');
		$password = base64_encode($this->input->post('password'));
		$sekolah = $this->input->post('sekolah');
		$where = array(
			'username' => $username,
			'password' => $password,
			'npsn'	   => $sekolah,
			);
		$cek = $this->login_model->cek_login($tb_user,$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' 	=> $username,
				'status'=> "login",
				'npsn'	=> $sekolah,
				);
			$this->session->set_userdata($data_session);
			redirect(site_url('admin/overview'));
		}else{
			$this->session->set_flashdata('failed', 'Data Yang Dimasukkan tidak sesuai');
			redirect(site_url('login'));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('cover'));
	}
}

?>