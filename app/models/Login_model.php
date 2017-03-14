<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	private $data;
	function __construct(){
		parent::__construct();
		
		$this->load->database(); // Berfungsi untuk memanggil database
	}

	// Berfungsi untuk mengambil data pada tabel user yang ada di database kita
	function ambil_data($data){		
		$this->data=$data;
		$user = $this->db->get_where('users',$data);
		if ($user->num_rows() == 0) {
			return FALSE;
		} else {
			return $user->result();
			
		}		
	}
	  /* fungsi restrict halaman */
	function user_id()
	{
		return $this->session->userdata('ID');
	}

	function username()
	{
	return $this->session->userdata('username');
	}

	function password()
	{
	return $this->session->userdata('password');
	}
	function email()
	{
		foreach($this->login_model->ambil_data($this->data) as $val){
			return $val->email;
		}
	}
	function level()
	{
		foreach($this->login_model->ambil_data($this->data) as $val){
			return $val->level;
		}
	}
	/* end fungsi restrict */
}