<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	//halaman home atau halaman depan
	
	public $u;
	public $p;
	public $e;
	public $topmenu;
	public $sidemenu;
	public $settings;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('login_model','settings_model','posts_model','users_model'));
		$this->load->library(array('upload','encrypt'));
		$this->load->helper(array('file','download','MY_url_encryption_helper'));
		$this->load->dbutil();
		
		//pengecekan login
		if(!$this->login_model->username()){
			redirect('Page_not_found');
		}

		$this->topmenu=$this->settings_model->get_top_menu();
		$this->sidemenu=$this->settings_model->get_side_menu();
	}
	public function about()
	{		
		$arr=array('post_name'=>'about');
		if($this->input->post('update')){
			$arrPost=array(
				'post_title'=>$this->input->post('title'),
				'post_content'=>$this->input->post('content'),
			);
			$this->posts_model->update_post($arr,$arrPost);
		}
		$pages=$this->posts_model->get_page_posttitle();
		
		$data = array(
				'title'   => 'Add Page',
				'script'=>'',
				'topmenu' => $this->topmenu,
				'sidemenu' => $this->sidemenu,
				'pages' => $pages,	
				'posts'=>$this->posts_model->get_post_by($arr),
		);
		$this->load->view('backendcontents/head', $data);
		$this->load->view('backendcontents/header');
		$this->load->view('backendcontents/form_edit_about');
		$this->load->view('backendcontents/footer');
		$this->load->view('backendcontents/foot');			
	}
	public function contactus($id='')
	{		
		$arr=array(
					'post_name'=>'contactus',

					);
		if($this->input->post('update')){
			$arrPost=array(
				'post_title'=>$this->input->post('title'),
				'post_content'=>$this->input->post('content'),
			);
			$this->posts_model->update_post($arr,$arrPost);
		}
		$pages=$this->posts_model->get_page_posttitle();
		
		$data = array(
				'title'   => 'Add Page',
				'script'=>'',
				'topmenu' => $this->topmenu,
				'sidemenu' => $this->sidemenu,
				'pages' => $pages,	
				'posts'=>$this->posts_model->get_post_by($arr),
		);
		$this->load->view('backendcontents/head', $data);
		$this->load->view('backendcontents/header');
		$this->load->view('backendcontents/form_edit_contactus');
		$this->load->view('backendcontents/footer');
		$this->load->view('backendcontents/foot');			
	}/*
	public function ourclient()
	{		
		$arr=array('post_name'=>'ourclient');
		if($this->input->post('update')){
			$arrPost=array(
				'post_title'=>$this->input->post('title'),
				'post_content'=>$this->input->post('content'),
			);
			$this->posts_model->update_post($arr,$arrPost);
		}
		$pages=$this->posts_model->get_page_posttitle();
		
		$data = array(
				'title'   => 'Add Page',
				'script'=>'',
				'topmenu' => $this->topmenu,
				'sidemenu' => $this->sidemenu,
				'pages' => $pages,	
				'posts'=>$this->posts_model->get_post_by($arr),
		);
		$this->load->view('backendcontents/head', $data);
		$this->load->view('backendcontents/header');
		$this->load->view('backendcontents/form_edit_ourclient');
		$this->load->view('backendcontents/footer');
		$this->load->view('backendcontents/foot');			
	}*/
	public function ourclients($id='',$delete='')
	{		
		if($delete=='delete'){
			$this->posts_model->del_post_by(array('ID'=>decode_url($id)));
		}
		$arr=array(
					'post_type'=>'ourclients',
					);
		if($this->input->post('update')){
			$arrPost=array(
				'menu_order'=>$this->input->post('order'),
				'post_title'=>$this->input->post('title'),
				'post_content'=>$this->input->post('content'),
			);
			$this->posts_model->update_post(
				array(
					'post_type'=>'ourclients',
					'ID'=>decode_url($id)
				),
				$arrPost);
		}
		if($this->input->post('add')){
			$arrPost=array(
				'menu_order'=>$this->input->post('order'),
				'post_title'=>$this->input->post('title'),
				'post_content'=>$this->input->post('content'),
				'post_type'=>'ourclients',
			);
			$this->posts_model->set_post($arrPost);
			
		}
		$pages=$this->posts_model->get_page_posttitle();
		
		$data = array(
				'id'=>$id,
				'title'   => 'Add Page',
				'script'=>'',
				'topmenu' => $this->topmenu,
				'sidemenu' => $this->sidemenu,
				'pages' => $pages,	
				'posts'=>$this->posts_model->get_posts_filterby($arr),
				'post'=>$this->posts_model->get_post_by(array('post_type'=>'ourclients','ID'=>decode_url($id))),
		);
		$this->load->view('backendcontents/head', $data);
		$this->load->view('backendcontents/header');
		$this->load->view('backendcontents/form_edit_ourclients');
		$this->load->view('backendcontents/footer');
		$this->load->view('backendcontents/foot');			
	}
	public function whatweoffer($id='',$delete='')
	{		
		if($delete=='delete'){
			$this->posts_model->del_post_by(array('ID'=>decode_url($id)));
		}
		$arr=array(
					'post_type'=>'whatweoffer',
					);
		if($this->input->post('update')){
			$arrPost=array(
				'menu_order'=>$this->input->post('order'),
				'post_title'=>$this->input->post('title'),
				'post_content'=>$this->input->post('content'),
			);
			$this->posts_model->update_post(array('post_type'=>'whatweoffer','ID'=>decode_url($id)),$arrPost);
		}
		if($this->input->post('add')){
			$arrPost=array(
				'menu_order'=>$this->input->post('order'),
				'post_title'=>$this->input->post('title'),
				'post_content'=>$this->input->post('content'),
				'post_type'=>'whatweoffer',
			);
			$this->posts_model->set_post($arrPost);
			
		}
		$pages=$this->posts_model->get_page_posttitle();
		
		$data = array(
				'id'=>$id,
				'title'   => 'Add Page',
				'script'=>'',
				'topmenu' => $this->topmenu,
				'sidemenu' => $this->sidemenu,
				'pages' => $pages,	
				'posts'=>$this->posts_model->get_posts_filterby($arr),
				'post'=>$this->posts_model->get_post_by(array('post_type'=>'whatweoffer','ID'=>decode_url($id))),
		);
		$this->load->view('backendcontents/head', $data);
		$this->load->view('backendcontents/header');
		$this->load->view('backendcontents/form_edit_whatweoffer');
		$this->load->view('backendcontents/footer');
		$this->load->view('backendcontents/foot');			
	}
	public function policy()
	{		
		$arr=array('post_name'=>'policy');
		if($this->input->post('update')){
			$arrPost=array(
				'post_title'=>$this->input->post('title'),
				'post_content'=>$this->input->post('content'),
			);
			$this->posts_model->update_post($arr,$arrPost);
		}
		$pages=$this->posts_model->get_page_posttitle();
		
		$data = array(
				'title'   => 'Add Page',
				'script'=>'',
				'topmenu' => $this->topmenu,
				'sidemenu' => $this->sidemenu,
				'pages' => $pages,	
				'posts'=>$this->posts_model->get_post_by($arr),
		);
		$this->load->view('backendcontents/head', $data);
		$this->load->view('backendcontents/header');
		$this->load->view('backendcontents/form_edit_policy');
		$this->load->view('backendcontents/footer');
		$this->load->view('backendcontents/foot');			
	}
	// public function preview($p)
	// {		
		// $arr=array('post_name'=>$p);
		
		// $pages=$this->posts_model->get_page_posttitle();
		
		// $data = array(
				// 'title'   => 'Add Page',
				// 'script'=>'',
				// 'topmenu' => $this->topmenu,
				// 'sidemenu' => $this->sidemenu,
				// 'pages' => $pages,	
				// 'posts'=>$this->posts_model->get_post_by($arr),
		// );
		// $this->load->view('page/head', $data);
		// // $this->load->view('page/header');
		// $this->load->view('backendcontents/preview');
		// // $this->load->view('page/footer');
		// // $this->load->view('page/foot');			
	// }
}
