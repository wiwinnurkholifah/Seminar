<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
     
    class M_Index extends CI_Model {
     
        function getData(){

            return $this->db->get('seminar')->result(); // me-return hasil dari get tb_siswa
        }
     
        function getDataByNoinduk($id){
            $this->db->where('id',$id); // where no induk
            return $this->db->get('seminar')->result(); // me-return hasil dari get tb_siswa
        }
     
        function deleteData($id){
            $this->db->where('id',$id); // where no induk
            $this->db->delete('seminar'); // mendelete tb_siswa sesuai kondisi di atas
        }
     
        function insertData($data){
            $this->db->insert('seminar',$data); // menginsert pada tb_siswa dengan variabel data
        }
     
        function updateData($id,$data){
            $this->db->where('id', $id); // where no induk
            $this->db->update('seminar', $data); //mengupdate tb_siswa sesuai kondisi di atas
        }
    }