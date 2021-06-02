<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Overview_model extends CI_Model
{
    private $tb_sekolah ="sekolah";

    public function getByPerlu($idsekolah){
        return $this->db->get_where($this->tb_sekolah,
        ["npsn"=>$idsekolah])->row();
    }

    public function TotalSiswa(){
        $query = $this->db->get("siswa");
        if($query->num_rows()>0)
        { return $query->num_rows(); }
        else { return 0;}
    }

    public function TotalKompli(){
        $query = $this->db->get("kompli");
        if($query->num_rows()>0)
        {return $query->num_rows();}
        else{ return 0;}
    }

    public function TotalRombel(){
        $query = $this->db->get("rombel");
        if($query->num_rows()>0)
        {return $query->num_rows();}
        else{return 0;}
    }

    public function TotalPengajuanKIP(){
        $query = $this->db->get("pengajuan_kip");
        if($query->num_rows()>0)
        {return $query->num_rows();}
        else{return 0;}
    }

    public function TotalSuratKeluar(){
        $query = $this->db->get("surat_keluar");
        if($query->num_rows()>0)
        {return $query->num_rows();}
        else{return 0;}
    }
}