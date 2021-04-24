<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

  public function index($nama = '')
  {
    $data['judul'] = 'kontak';  
    $data['nama'] = $nama;
    $this->load->view('templates/header', $data);
    $this->load->view('kontak/index', $data);
    $this->load->view('templates/footer');

     function proses()
	{
        $this->form_validation->set_rules('nama', 'nama','trim|required|min_length[1]|max_length[150]');
        $this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[200]');
        $this->form_validation->set_rules('no_hp', 'no_hp','trim|required|min_length[1]|max_length[13]');
		$this->form_validation->set_rules('pesan', 'pesan','trim|required|min_length[1]|max_length[200]');
		if ($this->form_validation->run()==true)
	   	{
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
			$no_hp = $this->input->post('no_hp');
			$pesan = $this->input->post('pesan');
			$this->auth->kontak($nama,$email,$no_hp,$pesan);
            $this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
            redirect('kontak');
		}
		else
		{
            $this->session->set_flashdata('error', validation_errors());
            redirect('kontak');
		}
	}

  }
}