<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $tb_user = "user";

    public $id;
    public $nama;
    public $username;
    public $password;
    public $npsn;

    public function rules (){
        return [
            ['field' => 'nama_user',
            'label' => 'nama_user',
            'rules' => 'required'],
            ['field' => 'username_user',
            'label' => 'username_user',
            'rules' => 'required'],
            ['field' => 'password_user',
            'label' => 'password_user',
            'rules' => 'required'],
            ['field' => 'npsn_user',
            'label' => 'npsn_user',
            'rules' => 'required'],
        ];
    }

    public function getALL(){
        return $this->db->get($this->tb_user)->result();
    }

    public function getByPerlu($id){
        return $this->db->get_where($this->tb_user,
        ["id"=>$id])->row();
    }

    public function simpan(){
        $post = $this->input->post();
        $this->id = date('Ymdis');
        $this->nama = $post["nama_user"];
        $this->username = $post["username_user"];
        $this->password =  base64_encode($post["password_user"]);
        $this->npsn = $post["npsn_user"];
        $this->db->insert($this->tb_user,$this);
    }

    public function update(){
        $post = $this->input->post();
        $this->id=$post["id_user"];
        $this->nama= $post["nama_user"];
        $this->username = $post["username_user"];
        $this->password = $post["password_user"];
        $this->npsn = $post["npsn_user"];
        $this->db->update($this->tb_user,$this,
            array("id" => $post['id_user']));
    }

  
    public function delete($id){
        return $this->db->delete($this->tb_user, array("id"=>$id));
    }
}