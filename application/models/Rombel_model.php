<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rombel_model extends CI_Model
{
    private $tb_rombel = "rombel";

    public $kd_rombel;
    public $nama_rombel;

    public function rules (){
        return [
            ['field' => 'kode_rombel',
            'label' => 'kode_rombel',
            'rules' => 'required'],
            ['field' => 'nama_rombel',
            'label' => 'nama_rombel',
            'rules' => 'required'],
        ];
    }

    public function getALL(){
        return $this->db->get($this->tb_rombel)->result();
    }

    public function getByPerlu($id){
        return $this->db->get_where($this->tb_rombel,
        ["kd_rombel"=>$id])->row();
    }

    public function simpan(){
        $post = $this->input->post();
        $this->kd_rombel = $post["kode_rombel"];
        $this->nama_rombel = $post["nama_rombel"];
        $this->db->insert($this->tb_rombel,$this);
    }

    public function update(){
        $post = $this->input->post();
        $this->kd_rombel = $post["kode_rombel"];
        $this->nama_rombel = $post["nama_rombel"];
        $this->db->update($this->tb_rombel,$this,
            array("kd_rombel" => $post['kode_rombel']));
    }

    public function delete($id){
        return $this->db->delete($this->tb_rombel, array("kd_rombel"=>$id));
    }
}