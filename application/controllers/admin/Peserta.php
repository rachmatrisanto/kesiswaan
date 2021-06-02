<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('peserta_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data["peserta"] = $this->peserta_model->getAll();
        $this->load->view("admin/siswa/list", $data);
    }

   public function keperluan(){
        $kompli["kompli"] = $this->peserta_model->getKompli();
        $rombel["rombel"] = $this->peserta_model->getRombel();
        $this->load->vars($kompli);
        $this->load->vars($rombel);
   }
    public function add()
    {   
        $this->keperluan();

        $peserta= $this->peserta_model;
        $validation = $this->form_validation;
        $validation->set_rules($peserta->rules());

        if ($validation->run()) {
            $peserta->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/peserta');
        } 

        
        $this->load->view("admin/siswa/new_form");
        

    }

    public function edit ($id = null)
    {
        $this->keperluan();
        if (!isset($id)) redirect('admin/peserta');

        $peserta= $this->peserta_model;
        $validation = $this->form_validation;
        $validation->set_rules($peserta->rules());

        if ($validation->run()) {
            $peserta->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/peserta');
        }

        $data["peserta"] = $peserta->getByNis($id);
        if (!$data["peserta"]) show_404();

        $this->load->view("admin/siswa/edit_form",$data);
    }

    public function lihat ($id = null)
    {
        $this->keperluan();
        if (!isset($id)) redirect('admin/peserta');

        $peserta= $this->peserta_model;
        $validation = $this->form_validation;
        $validation->set_rules($peserta->rules());

        if ($validation->run()) {
            $peserta->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["peserta"] = $peserta->getByNis($id);
        if (!$data["peserta"]) show_404();

        $this->load->view("admin/siswa/lihat_form",$data);
    }


    public function delete($id){
        if (!isset($id)) show_404();
        
        if ($this->peserta_model->delete($id)) {
            redirect(site_url('admin/peserta'));
        }
    }

}