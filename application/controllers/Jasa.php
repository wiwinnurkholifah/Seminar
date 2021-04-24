<?php
 
class Jasa extends CI_Controller{
	public function index($nama = '')
	{
		$data['judul'] = 'Layanan Jasa';  
		$data['nama'] = $nama;
		$this->load->view('templates/header', $data);
		$this->load->view('jasa/index', $data);
		$this->load->view('templates/footer');

	}
}