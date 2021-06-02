<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keluar_model extends CI_Model
{
    private $tb_siswa = "siswa"; 
    private $tb_surat_keluar = "surat_keluar";
    private $tb_sekolah="sekolah";

    public $id;
    public $nis;
    public $nama_guru;
    public $nip;
    public $keperluan;
    public $bulan;
    public $tahun;
    public $date_create;

    public function rules(){
        return [
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],
            ['field' => 'nis',
            'label' => 'nis',
            'rules' => 'required'],
            ['field' => 'nama_guru',
            'label' => 'nama_guru',
            'rules' => 'required'],
            ['field' => 'nip',
            'label' => 'nip',
            'rules' => 'required'],
            ['field' => 'keperluan',
            'label' => 'keperluan',
            'rules' => 'required'],
            ['field' => 'bulan',
            'label' => 'bulan',
            'rules' => 'required'],
            ['field' => 'tahun',
            'label' => 'tahun',
            'rules' => 'required'],
            ['field' => 'date_create',
            'label' => 'date_create',
            'rules' => 'required'],
        ];
    }

    private function query_surat(){
        $this->db->select('surat_keluar.*, siswa.nis ,
                            siswa.nis_lengkap as nis_lengkap,
                            siswa.nm_lengkap as nama_lengkap,
                            siswa.nm_ortu as nama_ortu,
                            siswa.alamat as alamat,
                            siswa.pekerjaan as pekerjaan, 
                            kompli.kd_kompli, 
                            kompli.nm_kompli as nama_kompli,
                            rombel.kd_rombel, 
                            rombel.nama_rombel as nama_rombel');
        $this->db->join('siswa', 'surat_keluar.nis = siswa.nis');
        $this->db->join('kompli' , 'siswa.kd_kompli = kompli.kd_kompli');
        $this->db->join('rombel' , 'siswa.kd_rombel = rombel.kd_rombel');
    }

    public function getAllKeluar(){
        $this->query_surat();
        $query = $this->db->get($this->tb_surat_keluar);
        return $query->result();
    }

    public function getByKeluar($id){
        $this->query_surat();
        $query = $this->db->get_where($this->tb_surat_keluar,
        ["surat_keluar.id"=>$id]);
        return $query->row();
    }

    private function query_siswa(){
        $this->db->select('siswa.*, kompli.kd_kompli, 
                            kompli.nm_kompli as nama_kompli,
                            rombel.kd_rombel, 
                            rombel.nama_rombel as nama_rombel');
        $this->db->join('kompli' , 'siswa.kd_kompli = kompli.kd_kompli');
        $this->db->join('rombel' , 'siswa.kd_rombel = rombel.kd_rombel');
    }

    public function getAllSiswa(){
        $this->query_siswa();
        $query = $this->db->get($this->tb_siswa);
        return $query->result();
    }


    public function getByNis($id){
        $this->query_siswa();
        $query = $this->db->get_where($this->tb_siswa,
        ["siswa.nis"=>$id]);
        return $query->row();
    }

    public function getByIdSekolah($id){
        return $this->db->get_where($this->tb_sekolah,
        ["npsn"=>$id])->row();
    }

    public function simpan(){
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nis = $post["nis"];
        $this->nama_guru= $post['nama_guru'];
        $this->nip = $post["nip"];
        $this->keperluan = $post["keperluan"];
        $this->bulan = $post["bulan"];
        $this->tahun = $post["tahun"];
        $this->date_create = $post["date_create"];
        $this->db->insert($this->tb_surat_keluar,$this);
    }

    public function delete($id){
        return $this->db->delete($this->tb_surat_keluar, array("surat_keluar.id"=> $id));
    }

}