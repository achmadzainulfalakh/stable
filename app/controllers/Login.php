<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	public $menu;
	public $settings;
	
	function __construct() {
		parent::__construct();
		$this->load->model(array('login_model','settings_model')); 
		$this->menu=array();
		
		$this->settings=array(
			'author'=>'Achmad Zainul Falakh',
			'description'=>'Lorem Ipsum, Ini adalah deskripsi situs.',
			'title'=>'Dashboard',
			'copyr'=>'Copyright &copy 2017 - stable.com',
			'favicon'=>base_url().'assets/images/favicon.png',
			
		);
	}

	// Berfungsi untuk menampilkan halaman login
	function index() { 
		if($this->login_model->username()){
			redirect('dashboard');
		} 
		else {
			$data = array(
					'title'   => 'Login',
					'script'=>'',
					'settings' => $this->settings,
					'topmenu' => $this->settings,
					'sidemenu' => $this->settings,
					'pesan' =>'',
			);
			// $data=array(
					// 'title'=>'Administrator',
					// 'isi' =>'admin/login_view',
					
					// 'menu' =>$this->menu,
					
					// );
			$this->load->view('backendcontents/head',$data);
			//$this->load->view('backendcontents/header');
			$this->load->view('backendcontents/form_login_admin2');
			$this->load->view('backendcontents/footer');
			$this->load->view('backendcontents/foot');
		}
	
	
	}

	// Berfungsi untuk melakukan validasi login
	function validasi() { 
		$data=array(
			'username'=> $this->security->xss_clean($this->input->post('username')),
			'password'=> md5($this->security->xss_clean($this->input->post('password')))
			);

		// Berfungsi untuk memanggil fungsi ambil_data pada class login_model
		if($this->login_model->ambil_data($data)) { 

			// Berfungsi untuk menyimpan user data
			$this->session->set_userdata($data);
			foreach($this->login_model->ambil_data($this->data) as $val){
				$this->session->set_userdata(array('ID'=>$val->ID));
			}
			// Jika data yang dimasukkan valid maka akan redirect ke halaman Dashboard
			redirect('dashboard');
		}else{ // Jika data yang diinput tidak valid maka akan dialihkan ke view login gagal
			redirect('pagenotfound');
		}
		}

	// Berfungsi untuk menghapus session atau logout
	function logout() {
		if($this->login_model->username()){
			$this->session->sess_destroy();
		}
		redirect('login');
	}	
}