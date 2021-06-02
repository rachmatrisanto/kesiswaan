<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_kip_model extends CI_Model
{
    private $tb_siswa = "siswa"; 
    private $tb_pengajuan_kip = "pengajuan_kip";
    private $tb_sekolah="sekolah";

    public $id;
    public $nis;
    public $img_sktm;
    public $month;
    public $year;
    public $date_create;
    public $date_update;

    public function rules(){
        return [
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],
            ['field' => 'nis',
            'label' => 'nis',
            'rules' => 'required'],
            ['field' => 'SKTM',
            'label' => 'sktm',
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
            ['field' => 'date_update',
            'label' => 'date_update',
            'rules' => 'required'],
        ];
    }

    private function query_kip(){
        $this->db->select('pengajuan_kip.*, siswa.nis ,
                            siswa.nis_lengkap as nis_lengkap,
                            siswa.nm_lengkap as nama_lengkap,
                            siswa.nm_ortu as nama_ortu,
                            siswa.alamat as alamat,
                            siswa.pekerjaan as pekerjaan, 
                            kompli.kd_kompli, 
                            kompli.nm_kompli as nama_kompli,
                            rombel.kd_rombel, 
                            rombel.nama_rombel as nama_rombel');
        $this->db->join('siswa', 'pengajuan_kip.nis = siswa.nis');
        $this->db->join('kompli' , 'siswa.kd_kompli = kompli.kd_kompli');
        $this->db->join('rombel' , 'siswa.kd_rombel = rombel.kd_rombel');
    }
    
    public function getAllKip(){
        $this->query_kip();
        $query = $this->db->get($this->tb_pengajuan_kip);
        return $query->result();
    }

    public function getByKip($id){
        $this->query_kip();
        $query = $this->db->get_where($this->tb_pengajuan_kip,
        ["pengajuan_kip.id"=>$id]);
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
        $this->month = $post["bulan"];
        $this->year = $post["tahun"];
        $this->date_create = $post["date_update"];
        $this->date_update = $post["date_update"];
        $this->img_sktm = $post['sktm'];
        $this->db->insert($this->tb_pengajuan_kip,$this);
    }

    public function delete($id){
        return $this->db->delete($this->tb_pengajuan_kip, array("pengajuan_kip.id"=> $id));
    }


}
   