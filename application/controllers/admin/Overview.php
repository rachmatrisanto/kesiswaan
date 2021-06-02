<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('overview_model');
    }

    public function index(){

        $jumlahsiswa["jumlahsiswa"] = $this->overview_model->TotalSiswa();
        $this->load->vars($jumlahsiswa);

        $jumlahkompli["jumlahkompli"] = $this->overview_model->Totalkompli();
        $this->load->vars($jumlahkompli);

        $jumlahrombel["jumlahrombel"] = $this->overview_model->Totalrombel();
        $this->load->vars($jumlahrombel);

        $jumlahpengajuankip["jumlahpengajuankip"] = $this->overview_model->TotalPengajuanKIP();
        $this->load->vars($jumlahpengajuankip);

        $jumlahsuratkeluar["jumlahsuratkeluar"] = $this->overview_model->TotalSuratKeluar();
        $this->load->vars($jumlahsuratkeluar);

        $idsekolah = $this->session->userdata("npsn");
        $datasekolah["sekolah"]=$this->overview_model->getByPerlu($idsekolah);
        $this->load->vars($datasekolah);

        $this->load->view("admin/overview");
    }

}