<?php
class Seminar extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Seminar_model');

    }

    public function index()
    {  
        $data['judul'] = 'Form Tambah Data Seminar';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('instansi', 'Instansi', 'required');
        $this->form_validation->set_rules('no_hp', 'No_HP', 'required|numeric' );
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if( $this->form_validation->run() ==FALSE){
        $this->load->view('templates/header', $data);
        $this->load->view('seminar/index');
        $this->load->view('templates/footer');
    }else{
        $this->Seminar_model->tambahDataSeminar();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('seminar');
    }
    }

}