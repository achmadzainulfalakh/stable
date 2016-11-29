<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_not_found extends CI_Controller {

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
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('usersmodel');
		//$this->load->helper('url_helper');		
	}
	//halaman home
	public function index()
	{
		$data=array(
			'imgheader'=>base_url().'assets/upload/home-bg.jpg',
			'title'=>'HOME',
			'subtitle'=>'',
			'menu'=>array(
				array(
					'activemenu'=>'active',
					'text'=>'Home',
					'link'=>base_url().'index.php/site/',
				),
				array(
					'activemenu'=>'',
					'text'=>'About',
					'link'=>base_url().'index.php/site/about',
				),
				array(
					'activemenu'=>'',
					'text'=>'posts',
					'link'=>base_url().'index.php/site/posts',
				),
				array(
					'activemenu'=>'',
					'text'=>'Contact',
					'link'=>base_url().'index.php/site/contact',
				),
			),
			'copyr'=>'Copyright &copy; Your Website 2016',
		);
		$this->load->view('page/head',$data);
		$this->load->view('page/header');

		$this->load->view('contents/pagenotfound');
		$this->load->view('page/footer');	
	}
	
	
	//halaman contact
	public function contact()
	{
		$data=array(
			'imgheader'=>base_url().'assets/upload/contact-bg.jpg',
			'title'=>'CONTACT',
			'subtitle'=>'Anda bisa menghubungi kami melalui contact dibawah ini',
			'menu'=>array(
				array(
					'activemenu'=>'',
					'text'=>'Home',
					'link'=>base_url().'index.php/site/',
				),
				array(
					'activemenu'=>'',
					'text'=>'About',
					'link'=>base_url().'index.php/site/about',
				),
				array(
					'activemenu'=>'',
					'text'=>'posts',
					'link'=>base_url().'index.php/site/posts',
				),
				array(
					'activemenu'=>'active',
					'text'=>'Contact',
					'link'=>base_url().'index.php/site/contact',
				),
			),
			'copyr'=>'Copyright &copy; Your Website 2016',
		);
		$this->load->view('frontendcontents/fhead',$data);
		$this->load->view('frontendcontents/fnav');
		$this->load->view('frontendcontents/fheader');
		$this->load->view('frontendcontents/fcontents/fcontact');
		$this->load->view('frontendcontents/ffooter');
		$this->load->view('frontendcontents/ffoot');
	}
	//halaman about
	public function about()
	{
		$data=array(
			'imgheader'=>base_url().'assets/upload/about-bg.jpg',
			'title'=>'ABOUT',
			'subtitle'=>'Anda ingin tahu kami siapa?',
			'menu'=>array(
				array(
					'activemenu'=>'',
					'text'=>'Home',
					'link'=>base_url().'index.php/site/',
				),
				array(
					'activemenu'=>'active',
					'text'=>'About',
					'link'=>base_url().'index.php/site/about',
				),
				array(
					'activemenu'=>'',
					'text'=>'posts',
					'link'=>base_url().'index.php/site/posts',
				),
				array(
					'activemenu'=>'',
					'text'=>'Contact',
					'link'=>base_url().'index.php/site/contact',
				),
			),
			'copyr'=>'Copyright &copy; Your Website 2016',
		);
		$this->load->view('frontendcontents/fhead',$data);
		$this->load->view('frontendcontents/fnav');
		$this->load->view('frontendcontents/fheader');
		$this->load->view('frontendcontents/fcontents/fabout');
		$this->load->view('frontendcontents/ffooter');
		$this->load->view('frontendcontents/ffoot');
	}
	//halaman semua postingan
	public function posts()
	{
		$data=array(
			'title'=>'POSTS',
			'subtitle'=>'Halaman ini berisi post kami',
			'imgheader'=>base_url().'assets/upload/post-bg.jpg',
			'menu'=>array(
				array(
					'activemenu'=>'',
					'text'=>'Home',
					'link'=>base_url().'index.php/site/',
				),
				array(
					'activemenu'=>'',
					'text'=>'About',
					'link'=>base_url().'index.php/site/about',
				),
				array(
					'activemenu'=>'active',
					'text'=>'posts',
					'link'=>base_url().'index.php/site/posts',
				),
				array(
					'activemenu'=>'',
					'text'=>'Contact',
					'link'=>base_url().'index.php/site/contact',
				),
			),
			'copyr'=>'Copyright &copy; Your Website 2016',
			'post'=>$this->Posts_model->getPosts(),
		);
		$this->load->view('frontendcontents/fhead',$data);
		$this->load->view('frontendcontents/fnav');
		$this->load->view('frontendcontents/fheader');
		$this->load->view('frontendcontents/fcontents/fposts');
		$this->load->view('frontendcontents/ffooter');
		$this->load->view('frontendcontents/ffoot');
	}
	//halaman satu postingan
	public function post($postname='')
	{

		$ID_post=$this->uri->segment(3);
		if($_POST){
			if ($_POST['act']=='add') {
		 	//insert menu
			$this->db->set('name', htmlspecialchars($_POST['name']));
			$this->db->set('email', htmlspecialchars($_POST['email']));
			$this->db->set('website', htmlspecialchars($_POST['website']));
			$this->db->set('ID_post', $ID_post);
			$this->db->set('content', htmlspecialchars($_POST['ck_editor']));
			$this->db->insert('comments');
		 	} 
		 	 
		}

		$data=array(
			
			'title'=>'POST',
			'subtitle'=>'',
			'imgheader'=>base_url().'assets/upload/post-bg.jpg',
			'menu'=>array(
				array(
					'activemenu'=>'',
					'text'=>'Home',
					'link'=>base_url().'index.php/site/',
				),
				array(
					'activemenu'=>'',
					'text'=>'About',
					'link'=>base_url().'index.php/site/about',
				),
				array(
					'activemenu'=>'active',
					'text'=>'posts',
					'link'=>base_url().'index.php/site/posts',
				),
				array(
					'activemenu'=>'',
					'text'=>'Contact',
					'link'=>base_url().'index.php/site/contact',
				),
			),
			'formcomment'=>$this->load->view('frontendcontents/fcontents/formcomment','',true),
			'comments'=>$this->load->view('frontendcontents/fcontents/comments','',true),
			'post'=>$this->Posts_model->getPost($postname),

		);
		$this->load->view('frontendcontents/fhead',$data);
		$this->load->view('frontendcontents/fnav');
		$this->load->view('frontendcontents/fheader');
		$this->load->view('frontendcontents/fcontents/fpost');
		
		$this->load->view('frontendcontents/ffooter');
		$this->load->view('frontendcontents/ffoot');
	}

}
