<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
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
	function get_user_by($data)
	{
		$post = $this->db->get_where('users', $data);
		if (!$post) {
			return FALSE;
		} else {
			return $post->row();	
		}	
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
			return $val->email;
		}
	}
	/* end fungsi restrict */
}