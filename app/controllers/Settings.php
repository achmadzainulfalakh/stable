<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('login_model','settings_model'));
		$this->load->library(array('upload','encrypt'));
		$this->load->helper(array('file','download','MY_url_encryption_helper'));
		$this->load->dbutil();
		
		//pengecekan login
		if(!$this->login_model->username()){
			redirect('Page_not_found');
		}

		$this->topmenu=array(
			
			'<li><a id="resetBtn" class="pull-left" href="#">Reset Pendaftar</a></li>',
			  '<li><a class="pull-left" href="login/logout">Logout</a></li>',
		);
		$this->sidemenu=array(
			
			'<li><a id="resetBtn" class="pull-left" href="#">Reset Pendaftar</a></li>',
			  '<li><a class="pull-left" href="login/logout">Logout</a></li>',
		);
		
	}
	public function index()
	{		
		$images=get_filenames('assets/images');
		$data = array(
				'title'   => 'Settings',
				'script'=>'',
				'pages' => $images,			
		);
		$this->load->view('backendcontents/head', $data);
		$this->load->view('backendcontents/header');
		$this->load->view('backendcontents/settings');
		$this->load->view('backendcontents/footer');
		$this->load->view('backendcontents/foot');			
	}
	public function Update_settings()
	{
		if($_POST){
		$urlicon=$this->input->post('admin_name');
		$this->settings_model->update_options($urlicon,'admin_name');
		$urlicon=$this->input->post('admin_email');
		$this->settings_model->update_options($urlicon,'admin_email');
		$urlicon=$this->input->post('admin_telp');
		$this->settings_model->update_options($urlicon,'admin_telp');
		$urlicon=$this->input->post('admin_descrip');
		$this->settings_model->update_options($urlicon,'admin_descrip');
		$urlicon=$this->input->post('admin_keyword');
		$this->settings_model->update_options($urlicon,'admin_keyword');
		$urlicon=$this->input->post('urlicon');
		$this->settings_model->update_options($urlicon,'site_icon_url');
		$sitename=$this->input->post('sitename');
		$this->settings_model->update_options($sitename,'blogname');
		$sitename=$this->input->post('deskripsi');
		$this->settings_model->update_options($sitename,'blogdescription');
		$sitename=$this->input->post('backgroundimgheader');
		$this->settings_model->update_options($sitename,'backgroundimgheader');
		$urlicon=$this->input->post('selogan');
		$this->settings_model->update_options($urlicon,'selogan');
		$urlicon=$this->input->post('semboyan');
		$this->settings_model->update_options($urlicon,'semboyan');
		$urlicon=$this->input->post('numberheader1');
		$this->settings_model->update_options($urlicon,'numheader1');
		$urlicon=$this->input->post('numberheader2');
		$this->settings_model->update_options($urlicon,'numheader2');
		$urlicon=$this->input->post('numberheader3');
		$this->settings_model->update_options($urlicon,'numheader3');
		$urlicon=$this->input->post('numberheader4');
		$this->settings_model->update_options($urlicon,'numheader4');
		$urlicon=$this->input->post('textheader1');
		$this->settings_model->update_options($urlicon,'textheader1');
		$urlicon=$this->input->post('textheader2');
		$this->settings_model->update_options($urlicon,'textheader2');
		$urlicon=$this->input->post('textheader3');
		$this->settings_model->update_options($urlicon,'textheader3');
		$urlicon=$this->input->post('textheader4');
		$this->settings_model->update_options($urlicon,'textheader4');
		$urlicon=$this->input->post('gridmenuicon1');
		$this->settings_model->update_options($urlicon,'gridmenuicon1');
		$urlicon=$this->input->post('gridmenuicon2');
		$this->settings_model->update_options($urlicon,'gridmenuicon2');
		$urlicon=$this->input->post('gridmenuicon3');
		$this->settings_model->update_options($urlicon,'gridmenuicon3');
		$urlicon=$this->input->post('gridmenuicon4');
		$this->settings_model->update_options($urlicon,'gridmenuicon4');
		$sitename=$this->input->post('gridmenu1');
		$this->settings_model->update_options($sitename,'gridmenu1');
		$urlicon=$this->input->post('gridmenu2');
		$this->settings_model->update_options($urlicon,'gridmenu2');
		$sitename=$this->input->post('gridmenu3');
		$this->settings_model->update_options($sitename,'gridmenu3');
		$urlicon=$this->input->post('gridmenu4');
		$this->settings_model->update_options($urlicon,'gridmenu4');
		$sitename=$this->input->post('gridmenulink1');
		$this->settings_model->update_options($sitename,'gridmenulink1');
		$urlicon=$this->input->post('gridmenulink2');
		$this->settings_model->update_options($urlicon,'gridmenulink2');
		$sitename=$this->input->post('gridmenulink3');
		$this->settings_model->update_options($sitename,'gridmenulink3');
		$urlicon=$this->input->post('gridmenulink4');
		$this->settings_model->update_options($urlicon,'gridmenulink4');
		$sitename=$this->input->post('textfooter');
		$this->settings_model->update_options($sitename,'textfooter');
		}
		
		//membuka halaman utama settings
		$this->index();
	}
	public function ajax()
	{		
		$images=get_filenames('assets/images');
		$data = array(
				'title'   => 'Settings',
				'script'=>'',
				'pages' => $images,			
		);
		// $this->load->view('backendcontents/head', $data);
		// $this->load->view('backendcontents/header');
		$this->load->view('backendcontents/settings', $data);
		// $this->load->view('backendcontents/footer');
		// $this->load->view('backendcontents/foot');			
	}
}
