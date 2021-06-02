<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Datasekolah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('datasekolah_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $idsekolah = $this->session->userdata("npsn");
        $data["sekolah"]=$this->datasekolah_model->getByPerlu($idsekolah);
        $this->load->view("admin/datasekolah/data",$data);
    }


    public function edit($id = null){
        if (!isset($id)) redirect('admin/datasekolah');

        $sekolah= $this->datasekolah_model;
        $validation = $this->form_validation;
        $validation->set_rules($sekolah->rules());

        if ($validation->run()) {
            $sekolah->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/datasekolah');
        } 
        $data["sekolah"] = $sekolah->getByPerlu($id);
        if (!$data["sekolah"]) show_404();

        $this->load->view("admin/datasekolah/edit_data",$data);
    }
}