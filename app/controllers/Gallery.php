<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

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
		$this->load->model(array('login_model','settings_model'));
		$this->load->library('pagination','upload');
		$this->load->helper(array('file','download'));
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
		// $this->settings=array(
			// 'author'=>'Achmad Zainul Falakh',
			// 'description'=>'Lorem Ipsum, Ini adalah deskripsi situs.',
			// 'title'=>'Dashboard - Gallery',
			// 'copyr'=>'Copyright &copy 2017 - stable.com',
			// 'favicon'=>base_url().'assets/images/favicon.png',
			
		// );
		
	}
	public function index()
	{
		// if($_POST){
			// if($this->input->post('reset')){
				// $this->pendaftar->reset_pendaftar();
			// }
		// }

			// $limit=2;
			// $config['base_url'] = base_url().'dashdashboard';
			// $config['total_rows'] = $this->pendaftar->getCount();
			// $config['per_page'] = $limit;
			// $config['full_tag_open'] = '<ul class="pagination">';
			// $config['full_tag_close'] = '</ul>';
			// $config['num_tag_open'] = '<li>';
			// $config['num_tag_close'] = '</li>';
			// $config['prev_tag_open'] = '<li>';
			// $config['prev_tag_close'] = '</li>';
			// $config['next_tag_open'] = '<li>';
			// $config['next_tag_close'] = '</li>';
			// $config['cur_tag_open'] = '<li class="active"><a href="#">';
			// $config['cur_tag_close'] = '</a></li>';
			
			// $this->pagination->initialize($config);
		
			$images=get_filenames('assets/images');
			$data = array(
					'title'   => 'Gallery',
					'script'=>'',
					// 'settings' => $this->settings,
					'topmenu' => $this->topmenu,
					'sidemenu' => $this->sidemenu,
					'images' => $images,
					
			);
			// $datatable = array(
				// 'table_title'   => 'Daftar Pendaftar',
				// 'table_heading' => 'Seluruh pendaftar siswa baru smkti annajiyah',
				// 'table_entries' => $this->pendaftar->getAllwithLimit($limit,$this->uri->segment(3)),
				// 'pagination' => $this->pagination->create_links(),
			// );
			$this->load->view('backendcontents/head', $data);
			$this->load->view('backendcontents/header');
			$this->load->view('backendcontents/gallery');
			$this->load->view('backendcontents/footer');
			$this->load->view('backendcontents/foot');			


	}
	//halaman upload pada gallery
	public function upload()
	{
		$data=array('error' => '' );
		$this->load->view('backendcontents/head',$data);
		$this->load->view('backendcontents/header');
		$this->load->view('backendcontents/gallery_upload');
		$this->load->view('backendcontents/footer');
		$this->load->view('backendcontents/foot');	
	}
	public function do_upload()
	{
		$config['upload_path']          = 'assets/images/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 5000000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
				$data = array('error' => $this->upload->display_errors());

				//$this->load->view('upload_form', $error);
				$this->load->view('backendcontents/head',$data);
				$this->load->view('backendcontents/header');
				$this->load->view('backendcontents/gallery_upload');
				$this->load->view('backendcontents/footer');
				$this->load->view('backendcontents/foot');	
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());

				$this->load->view('backendcontents/head');
				$this->load->view('backendcontents/header');
				$this->load->view('backendcontents/gallery_upload_success',$data);
				$this->load->view('backendcontents/footer');
				$this->load->view('backendcontents/foot');	
				// $this->load->view('gallery_upload_success', $data);
		}
	}
	public function confimage($name)
	{
		//echo $name;
		$data=array(
			'imgname'=>$name,
			'imgalt'=>'gambar_'.$name,
			'imglink'=>base_url().'assets/images/'.$name,
		);
		$this->load->view('backendcontents/head',$data);
		$this->load->view('backendcontents/header');
		$this->load->view('backendcontents/gallery_confimage');
		$this->load->view('backendcontents/footer');
		$this->load->view('backendcontents/foot');	
	}
	//metode delete gambar
	public function delimage($name)
	{
		//file helper dapat membantu untuk menghapus file
		// $this->load->helper('file');
		//script php menghapus file
		// delete_files(base_url().'assets/images/'.$name);
		unlink('assets/images/'.$name);
		
	}
	//metode rename gambar
	public function renameimage($oldname,$newname)
	{
		// $oldname=$this->security->xss_clean($oldname);
		// $newname=$this->security->xss_clean($newname);
		// $newname=strip_tags($newname);
		// $newname=strlen(preg_replace('/[^a-zA-Z]/','',$newname));
		// $oldname=strip_tags($oldname);
		// $oldname=strlen(preg_replace('/[^a-zA-Z]/','',$oldname));
		// $newname=$this->input->post('newname');
		// $oldname=$this->input->post('oldname');
		//$n=trim($newname);
		rename('assets/images/'.$oldname, 'assets/images/'. str_replace('%20','_',$newname));
	}
	public function ajax()
	{
			$images=get_filenames('assets/images');
			$data = array(
					'title'   => 'Gallery',
					'script'=>'',
					// 'settings' => $this->settings,
					'topmenu' => $this->topmenu,
					'sidemenu' => $this->sidemenu,
					'images' => $images,
					
			);
			// $this->load->view('backendcontents/head', $data);
			// $this->load->view('backendcontents/header');
			$this->load->view('backendcontents/gallery', $data);
			// $this->load->view('backendcontents/footer');
			// $this->load->view('backendcontents/foot');			


	}
	

	
}
