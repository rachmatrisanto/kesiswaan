<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_kip extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengajuan_kip_model');
        $this->load->library('form_validation');
        $this->load->helper('form','url');
    }

    public function index(){
        $data["pengajuan_kip"] = $this->pengajuan_kip_model->getAllKip();
        $this->load->view("admin/pengajuan_kip/list",$data);
    }

   

    public function cari_siswa(){
        $siswa["siswa"] = $this->pengajuan_kip_model->getAllSiswa();
        $this->load->vars($siswa);
        $this->load->view("admin/pengajuan_kip/cari_siswa");
    }
    
    public function add(){
        
        $pengajuan_kip = $this->pengajuan_kip_model;
        $this->upload_img();
        if ($pengajuan_kip->simpan()) {
            $this->session->set_flashdata('failed', 'Berhasil disimpan');
            redirect('admin/pengajuan_kip/daftar/'.$this->input->post("id"));
        } else { 
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/pengajuan_kip/daftar/'.$this->input->post("id"));}
        
    }

    public function daftar($iddaftar){
        
        $data["daftar"]=$this->pengajuan_kip_model->getByKip($iddaftar);
        $this->load->view('admin/pengajuan_kip/daftar',$data);
    }

    public function upload_img(){

        $config['upload_path']          = './uploads/sktm/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             =  2048;
        $config['file_name']            = 'sktm_'.date("dmYis").".jpg";
        $config['overwrite']            = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('sktm')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/pengajuan_kip/cari_siswa', $error);
        } else {
            return $_POST['sktm'] = $this->upload->data('file_name');
        }
    }
   

    public function dicari ()
    {   
        $id = $_GET["id"];

        $pengajuan_kip= $this->pengajuan_kip_model;
        $data["pengajuan_kip"] = $pengajuan_kip->getByNis($id);
        if (!$data["pengajuan_kip"]) show_404();

        $this->load->view("admin/pengajuan_kip/view_form",$data);
    }

    
    public function delete($id){
        if (!isset($id)) show_404();
        
        $sktm = $this->pengajuan_kip_model->getByKip($id);
        if ($sktm->img_sktm != null) {
            unlink("./uploads/sktm/$sktm->img_sktm");
            $this->pengajuan_kip_model->delete($id);
            redirect(site_url('admin/pengajuan_kip'));
        } else {
            redirect(site_url('admin/overview'));
        }
    }

    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
     
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }

    public function cetak_surat($id){
        $idsekolah = $this->session->userdata("npsn");
        $this->load->library('pdf');
        $pdf = $this->pdf;
        $pdf->setPaper('A4', 'potrait');
        $pdf->filename = "Pengajuan Awal KIP";
        $data["cetak"] = $this->pengajuan_kip_model->getByKip($id);
        $tglIndo = array('tanggal' => $this->tgl_indo(date('Y-m-d')),);
        $this->load->vars($tglIndo);
        $sekolah["sekolah"] = $this->pengajuan_kip_model->getByIdSekolah($idsekolah);
        $this->load->vars($sekolah);
        $pdf->load_view('admin/pengajuan_kip/cetak',$data);
    }

   
}
