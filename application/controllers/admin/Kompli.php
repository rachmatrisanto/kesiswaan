<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kompli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kompli_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data["kompli"] = $this->kompli_model->getAll();
        $this->load->view("admin/kompli/list",$data);
    }

    public function add(){
        $kompli= $this->kompli_model;
        $validation = $this->form_validation;
        $validation->set_rules($kompli->rules());

        if ($validation->run()) {
            $kompli->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/kompli');
        } 
        
        $this->load->view("admin/kompli/new_form");
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/kompli');

        $kompli= $this->kompli_model;
        $validation = $this->form_validation;
        $validation->set_rules($kompli->rules());

        if ($validation->run()) {
            $kompli->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/kompli');
        } 

        $data["kompli"] = $kompli->getByPerlu($id);
        if (!$data["kompli"]) show_404();

        $this->load->view("admin/kompli/edit_form",$data);
    }

    public function lihat ($id = null)
    {
        if (!isset($id)) redirect('admin/kompli');

        $kompli= $this->kompli_model;
        $validation = $this->form_validation;
        $validation->set_rules($kompli->rules());

        if ($validation->run()) {
            $kompli->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        } 

        $data["kompli"] = $kompli->getByPerlu($id);
        if (!$data["kompli"]) show_404();

        $this->load->view("admin/kompli/lihat_form",$data);
    } 

    public function delete($id){
        if (!isset($id)) show_404();
        
        if ($this->kompli_model->delete($id)) {
            redirect(site_url('admin/kompli'));
        }
    }


}