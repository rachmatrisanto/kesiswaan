<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datasekolah_model extends CI_Model
{
    private $tb_sekolah ="sekolah";

    public function rules (){
        return [
            ['field' => 'npsn',
            'label' => 'npsn',
            'rules' => 'required'],
            ['field' => 'nama_kepsek',
            'label' => 'nama_kepsek',
            'rules' => 'required'],
        ];
    }

    public function getALL(){
        return $this->db->get($this->tb_sekolah)->result();
    }

    public function getByPerlu($id){
        return $this->db->get_where($this->tb_sekolah,
        ["npsn"=>$id])->row();
    }

    public function update(){
        $post = $this->input->post();
        $this->id=$post["id"];
        $this->npsn = $post["npsn"];
        $this->nama_sekolah = $post["nama_sekolah"];
        $this->alamat = $post["alamat"];
        $this->kodepos = $post["kodepos"];
        $this->email = $post["email"];
        $this->website= $post["website"];
        $this->nama_kepsek = $post["nama_kepsek"];
        $this->golongan = $post["golongan"];
        $this->pangkat = $post["pangkat"];
        $this->nip = $post["nip"];
        $this->db->update($this->tb_sekolah,$this,
            array("id" => $post['id']));
    }
}