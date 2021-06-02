<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

class Login_model extends CI_Model{

    public function cek_login($tb_user,$where){		
		return $this->db->get_where($tb_user,$where);
	}	
  
}