<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('surat_keluar_model');
        $this->load->library('form_validation');
        $this->load->helper('form','url');
    }

    public function index(){
        $data["surat_keluar"] = $this->surat_keluar_model->getAllKeluar();
        $this->load->view("admin/surat_keluar/list",$data);
    }

    public function cari_siswa(){
        $siswa["siswa"] = $this->surat_keluar_model->getAllSiswa();
        $this->load->vars($siswa);
        $this->load->view("admin/surat_keluar/cari_siswa");
    }

    public function add(){
        $surat_keluar = $this->surat_keluar_model;
        if ($surat_keluar->simpan()) {
            $this->session->set_flashdata('failed', 'Berhasil disimpan');
            redirect('admin/surat_keluar/cetak_surat/'.$this->input->post("id"));
        } else { 
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/surat_keluar/cetak_surat/'.$this->input->post("id"));
        }
        
    }


    public function dicari ()
    {   
        $id = $_GET["id"];

        $surat_keluar= $this->surat_keluar_model;
        $data["surat_keluar"] = $surat_keluar->getByNis($id);
        if (!$data["surat_keluar"]) show_404();

        $this->load->view("admin/surat_keluar/view_form",$data);
    }

    public function delete($id){
        if (!isset($id)) show_404();
        
        if ($this->surat_keluar_model->delete($id)) {
            redirect(site_url('admin/surat_keluar'));
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
        $this->load->library('pdf');
        $pdf = $this->pdf;
        $pdf->setPaper('A4', 'potrait');
        $pdf->filename = "Surat Keluar";
        $data["cetak"] = $this->surat_keluar_model->getByKeluar($id);
        $tglIndo = array('tanggal' => $this->tgl_indo(date('Y-m-d')),);
        $this->load->vars($tglIndo);
        $pdf->load_view('admin/surat_keluar/cetak',$data);
    }

}