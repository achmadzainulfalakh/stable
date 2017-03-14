<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//pengecekan login
		if(!$this->login_model->username()){
			redirect('login');
		}
		
	}
	public function index()
	{		
		$data = array(
				'title'   => 'Pesan',
				'script'=>'',
				'data' => $this->pesan_model->get_pesan_orderby('status  DESC'),			
		);
		//memuat tampilan
		$this->load->view('backendcontents/head', $data);
		$this->load->view('backendcontents/header');
		$this->load->view('backendcontents/pesan');
		$this->load->view('backendcontents/footer');
		$this->load->view('backendcontents/foot');			
	}
	public function read($id='',$delete='')
	{		
		if ($delete=='delete') {
			$this->pesan_model->del_pesan(array('ID'=>decode_url($id)));
			redirect(base_url().'pesan');
		}
		$data = array(
				'title'   => 'Pesan',
				'script'=>'',
				'data' => $this->pesan_model->get_pesan(array('ID'=>decode_url($id))),			
		);
		$this->pesan_model->set_pesan_read(array('ID'=>decode_url($id)),array('status'=>'read'));
		$this->load->view('backendcontents/head', $data);
		$this->load->view('backendcontents/header');
		$this->load->view('backendcontents/pesan_read');
		$this->load->view('backendcontents/footer');
		$this->load->view('backendcontents/foot');				
	}
	public function ajax()
	{		
		$data = array(
				'title'   => 'Pesan',
				'script'=>'',
				'data' => $this->pesan_model->get_pesan_orderby('status  DESC'),			
		);
		//memuat tampilan
		// $this->load->view('backendcontents/head', $data);
		// $this->load->view('backendcontents/header');
		$this->load->view('backendcontents/pesan', $data);
		// $this->load->view('backendcontents/footer');
		// $this->load->view('backendcontents/foot');			
	}

	
}
