<?php
class Seminar_model extends CI_model{
    public function getAllSeminar()
    {
        return $this->db->get('seminar')->result_array();
    }

    public function tambahDataSeminar()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "instansi" => $this->input->post('instansi', true),
            "no_hp" => $this->input->post('no_hp', true),
            "email" => $this->input->post('email', true)
        ];

        $this->db->insert('seminar', $data);
    }

   
    public function getSeminarById($id)
    {
        return $this->db->get_where('seminar', ['id' =>$id])->row_array();
    }
    
}