<?php

class Artikel extends CI_Controller {
    public function index($wiwin = ''){       
        $data['judul'] = 'pendaftaran';     
        $data['nama'] = $wiwin;
        $this->load->view('templates/header', $data);
        $this->load->view('artikel/index1', $data); 
        $this->load->view('templates/footer');
    }
}