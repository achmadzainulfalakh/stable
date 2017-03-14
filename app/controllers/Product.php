<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
		
	public function __construct()
	{
		parent::__construct();
		
		//pengecekan login
		if(!$this->login_model->username()){
			redirect('login');
		}
	}
	public function index($id='')
	{		
		$arr=array('post_type'=>'product');

		//mempersiapkan data tampilan
		$data = array(
				'title'   => 'Add Page',
				// 'script'=>'',
				'id' => $id,
				'posts'=>$this->posts_model->get_posts_filterby($arr),
				'post'=>$this->posts_model->get_post_by(array('post_type'=>'product','ID'=>decode_url($id))),
		);
		//memuat tampilan
		$this->load->view('backendcontents/head', $data);
		$this->load->view('backendcontents/header');
		$this->load->view('backendcontents/form_edit_product');
		$this->load->view('backendcontents/footer');
		$this->load->view('backendcontents/foot');			
	}
	
	public function add()
	{
		//add
		if($this->input->post('add')){
			$arrPost=array(
				'post_name'=>$this->input->post('idalias'),
				'guid'=>$this->input->post('icon'),
				'post_title'=>$this->input->post('name'),
				'menu_order'=>$this->input->post('order'),
				'post_mime_type'=>$this->input->post('banner'),
				'post_content'=>$this->input->post('content'),
				'post_password'=>$this->input->post('bgcolor'),
				'post_type'=>'product',
			);
			$this->posts_model->set_post($arrPost);
			redirect(base_url()."product");
		}
		
		//mengembalikan proses ke halaman index
		$this->index();
	}
	
	public function edit($id='')
	{
		$arr=array('ID'=> decode_url($id),'post_type'=>'product');
		//edit
		if($this->input->post('update')){
			$arrPost=array(
				'post_name'=>$this->input->post('idalias'),
				'guid'=>$this->input->post('icon'),
				'post_title'=>$this->input->post('name'),
				'menu_order'=>$this->input->post('order'),
				'post_mime_type'=>$this->input->post('banner'),
				'post_content'=>$this->input->post('content'),
				'post_password'=>$this->input->post('bgcolor'),
			);
			$this->posts_model->update_post($arr,$arrPost);
			redirect(base_url()."product");
		}
		
		//mengembalikan proses ke halaman index
		$this->index($id);
		
	}
	
	public function delete($id='')
	{
		//hapus
		$this->posts_model->del_post_by(array('ID'=>decode_url($id)));
	
		//mengembalikan proses ke halaman index
		$this->index($id);
	}
	
	public function ajax($id='')
	{		
		$arr=array('post_type'=>'product');

		//mempersiapkan data tampilan
		$data = array(
				'title'   => 'Add Page',
				'id' => $id,
				'posts'=>$this->posts_model->get_posts_filterby($arr),
				'post'=>$this->posts_model->get_post_by(array('post_type'=>'product','ID'=>decode_url($id))),
		);
		//memuat tampilan
		// $this->load->view('backendcontents/head', $data);
		// $this->load->view('backendcontents/header');
		$this->load->view('backendcontents/form_edit_product', $data);
		// $this->load->view('backendcontents/footer');
		// $this->load->view('backendcontents/foot');			
	}

}
