<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
     
    class C_Index extends CI_Controller {
     
        function __construct(){
            parent::__construct();
            $this->load->model('M_Index'); // Auto load model M_Index pada fungsi construct
        }
     
        public function index()
        {
            $this->load->view('V_Index'); // Memanggil View V_Index
        }
     
        function ambilData(){
            $data = $this->M_Index->getData(); // Menampung value return dari fungsi getData ke variabel data
            echo json_encode($data); // Mengencode variabel data menjadi json format
        }
     
        function ambilDataByNoinduk(){
            $noinduk = $this->input->post('id'); //Menangkap inputan id
            $data = $this->M_Index->getDataByid($id); // Menampung value return dari fungsi getDataByNoinduk ke variabel data
            echo json_encode($data); // Mengencode variabel data menjadi json format
        }
     
        function hapusData(){
            $noinduk = $this->input->post('id');
            $data = $this->M_Index->deleteData($id);
            echo json_encode($data); // Mengencode variabel data menjadi json format
        }
     
        function tambahData(){
            $id    = $this->input->post('id'); //Menangkap inputan no induk
            $nama       = $this->input->post('nama'); //Menangkap inputan nama
            $jenis_kelamin    = $this->input->post('jenis_kelamin'); //Menangkap inputan alamat
            $instansi       = $this->input->post('instansi'); 
            $no_hp       = $this->input->post('no_hp'); 
            $email       = $this->input->post('email');
            $data = ['id' => $id, 'nama' => $nama, 'jenis_kelamin' => $jenis_kelamin , 'instansi' => $instansi, 'no_hp' => $no_hp, 'email' => $email];
            $data = $this->M_Index->insertData($data);
            echo json_encode($data); // Mengencode variabel data menjadi json format
        }
     
        function perbaruiData(){
            $id    = $this->input->post('id');
            $nama       = $this->input->post('nama');
            $jenis_kelamin    = $this->input->post('email');
            $instansi      = $this->input->post('instansi');
            $no_hp       = $this->input->post('no_hp');
            $email     = $this->input->post('email');

     
            $data = ['id' => $id, 'nama' => $nama, 'jenis_kelamin' => $jenis_kelamin , 'instansi' => $instansi, 'no_hp' => $no_hp, 'email' => $email];
     
            $data = $this->M_Index->updateData($id,$data);
             
            echo json_encode($data); // Mengencode variabel data menjadi json format
        }
    }