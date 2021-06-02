<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rombel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rombel_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data["rombel"] = $this->rombel_model->getAll();
        $this->load->view("admin/rombel/list",$data);
    }

    public function add(){
        $rombel= $this->rombel_model;
        $validation = $this->form_validation;
        $validation->set_rules($rombel->rules());

        if ($validation->run()) {
            $rombel->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/rombel');
        } 
        
        $this->load->view("admin/rombel/new_form");
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/rombel');

        $rombel= $this->rombel_model;
        $validation = $this->form_validation;
        $validation->set_rules($rombel->rules());

        if ($validation->run()) {
            $rombel->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/rombel');
        } 

        $data["rombel"] = $rombel->getByPerlu($id);
        if (!$data["rombel"]) show_404();

        $this->load->view("admin/rombel/edit_form",$data);
    }

    public function lihat ($id = null)
    {
        if (!isset($id)) redirect('admin/rombel');

        $rombel= $this->rombel_model;
        $validation = $this->form_validation;
        $validation->set_rules($rombel->rules());

        if ($validation->run()) {
            $rombel->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        } 

        $data["rombel"] = $rombel->getByPerlu($id);
        if (!$data["rombel"]) show_404();

        $this->load->view("admin/rombel/lihat_form",$data);
    } 

    public function delete($id){
        if (!isset($id)) show_404();
        
        if ($this->rombel_model->delete($id)) {
            redirect(site_url('admin/rombel'));
        }
    }


}