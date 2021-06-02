<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kompli_model extends CI_Model
{
    private $tb_kompli = "kompli";

    public $kd_kompli;
    public $nm_kompli;

    public function rules (){
        return [
            ['field' => 'kode_kompli',
            'label' => 'kode_kompli',
            'rules' => 'required'],
            ['field' => 'nama_kompli',
            'label' => 'nama_kompli',
            'rules' => 'required'],
        ];
    }

    public function getALL(){
        return $this->db->get($this->tb_kompli)->result();
    }

    public function getByPerlu($id){
        return $this->db->get_where($this->tb_kompli,
        ["kd_kompli"=>$id])->row();
    }

    public function simpan(){
        $post = $this->input->post();
        $this->kd_kompli = $post["kode_kompli"];
        $this->nm_kompli = $post["nama_kompli"];
        $this->db->insert($this->tb_kompli,$this);
    }

    public function update(){
        $post = $this->input->post();
        $this->kd_kompli = $post["kode_kompli"];
        $this->nm_kompli = $post["nama_kompli"];
        $this->db->update($this->tb_kompli,$this,
            array("kd_kompli" => $post['kode_kompli']));
    }

    public function delete($id){
        return $this->db->delete($this->tb_kompli, array("kd_kompli"=>$id));
    }
}