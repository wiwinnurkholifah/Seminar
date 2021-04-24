<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}
 
	function kontak($nama,$email,$no_hp,$pesan)
	{
		$data_user = array(
            'nama'          =>$nama,
            'email'         =>$email,
            'no_hp'         =>$no_hp,
            'pesan'         => $pesan
		);
		$this->db->insert('kontak',$data_user);
	}
}