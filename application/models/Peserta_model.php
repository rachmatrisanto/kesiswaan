<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Peserta_model extends CI_Model

{
    private $tb_siswa = "siswa"; 
    private $tb_kompli = "kompli";
    private $tb_rombel = "rombel";

    public $nis;
    public $nm_lengkap;
    public $kd_kompli;
    public $kd_rombel;
    public $nm_ortu;
    public $alamat;
    public $pekerjaan;

    public function rules(){
        return [
            ['field' => 'nis',
            'label' => 'nis',
            'rules' => 'required'],
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
            ['field' => 'kompli',
            'label' => 'kompli',
            'rules' => 'required'],
            ['field' => 'rombel',
            'label' => 'rombel',
            'rules' => 'required'],
            ['field' => 'namaOrtu',
            'label' => 'namaOrtu',
            'rules' => 'required'],
            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],
            ['field' => 'pekerjaan',
            'label' => 'pekerjaan',
            'rules' => 'required'],
        ];
    }

    private function queryjoin(){
        $this->db->select('siswa.*, kompli.kd_kompli, 
                            kompli.nm_kompli as nama_kompli,
                            rombel.kd_rombel, rombel.nama_rombel  as nama_rombel');
        $this->db->join('kompli' , 'siswa.kd_kompli = kompli.kd_kompli');
        $this->db->join('rombel' , 'siswa.kd_rombel = rombel.kd_rombel');
    }

    public function getAll(){
        $this->queryjoin();
        $query = $this->db->get($this->tb_siswa);
        return $query->result();
    }

    public function getKompli(){
        return $this->db->get($this->tb_kompli)->result();
    }

    public function getRombel(){
        return $this->db->get($this->tb_rombel)->result();
    }

    public function getByNis($id){
        $this->queryjoin();
        $query = $this->db->get_where($this->tb_siswa,
        ["siswa.nis"=>$id]);
        return $query->row();
    }


    public function simpan(){
        $post = $this->input->post();
        $this->nis = $post["nis"];
        $this->nm_lengkap = $post["nama"];
        $this->kd_kompli = $post["kompli"];
        $this->kd_rombel = $post["rombel"];
        $this->nm_ortu = $post["namaOrtu"];
        $this->alamat = $post["alamat"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->db->insert($this->tb_siswa,$this);
    }

    public function update(){
        $post = $this->input->post();
        $this->nis = $post["id"];
        $this->nm_lengkap = $post["nama"];
        $this->kd_kompli = $post["kompli"];
        $this->kd_rombel = $post["rombel"];
        $this->nm_ortu = $post["namaOrtu"];
        $this->alamat = $post["alamat"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->db->update($this->tb_siswa,$this,
            array("siswa.nis"=>$post['id']));
    }

    public function delete($id){
        return $this->db->delete($this->tb_siswa, array("nis"=>$id));
    }
}
