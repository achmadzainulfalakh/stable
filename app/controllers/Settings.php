<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

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
		$this->load->library(array('upload','encrypt'));
		$this->load->helper(array('file','download','MY_url_encryption_helper'));
		$this->load->dbutil();
		
		if(!$this->login_model->username()){
			redirect('login');
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
		$images=get_filenames('assets/images');
		$data = array(
				'title'   => 'Settings',
				'script'=>'',
				// 'settings' => $this->settings,
				'topmenu' => $this->topmenu,
				'sidemenu' => $this->sidemenu,
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
	// end halaman upload pada gallery
	
	// //halaman delete pendaftar
	// public function deletePendaftar()
	// {
		// if($_POST){
			// if($this->input->post('id')){
				// //hapus pendaftar
				// if($this->pendaftar->delete_pendaftar($this->input->post('id'))){
				// //redirect kembai ke halaman dashdashboard
				// redirect('dashdashboard');
				// }
			// }
		// }
		// if($this->login_model->username()){
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
		
			// $data = array(
					// 'title'   => 'Daftar Pendaftar',
					// 'menu' => $this->menu,
					// 'script'=>$this->load->view('script/modal_delete', '', TRUE),
			// );
			// $datatable = array(
				// 'table_title'   => 'Daftar Pendaftar',
				// 'table_heading' => 'Seluruh pendaftar siswa baru smkti annajiyah',
				// 'table_entries' => $this->pendaftar->getAllwithLimit($limit,$this->uri->segment(3)),
				// 'pagination' => $this->pagination->create_links(),
				
			// );
			// $this->load->view('page/head', $data);
			// //this->load->view('page/header');
			// //$this->load->view('contents/iframetable');
			// //$this->parser->parse('contents/tableBT_template', $datatable);
			// //$this->load->view('contents/modal_reset');
			// $this->load->view('contents/modal_delete');
			// $this->load->view('page/footer');		
		// }else{
			// redirect('login');
		// }
	// }
	// //halaman table
	// public function listpendaftar()
	// {
		
		// $config['base_url'] = 'listpendaftar.html';
		// $config['total_rows'] = $this->pendaftar->getCount();
		// $config['per_page'] = 2;

		// $this->pagination->initialize($config);
		
		// $data = array(
				// 'title'   => 'Daftar Pendaftar',
				// 'menu' => '<li><a class="pull-left" href="login/logout">Logout</a></li>',
				// 'script'=>'',
		// );
		// $datatable = array(
				// 'table_title'   => 'Daftar Pendaftar',
				// 'table_heading' => 'Seluruh pendaftar siswa baru smkti annajiyah',
				// 'table_entries' => $this->pendaftar->getAllwithLimit($this->uri->segment(3)),
				// 'pagination' => $this->pagination->create_links(),
		// );



		// $this->load->view('page/head', $data);
	// //	$this->load->view('page/header');
		// $this->parser->parse('contents/tableBT_template', $datatable);
		// $this->pagging();
	// //	$this->load->view('page/footer');	
	// }
	// public function exportcsv()
	// {
		// $this->pendaftar->exportcsv();
	// }
	
	
	// public function edit($idusr='')
	// {
		
		
		
		// $data=array(
		// 'username'=>$this->u,
		// 'password'=>'ququm',
		// 'title'=>'Edit User',
		// 'tahuncopy'=>date("Y"),
		// 'author'=>'Achmad Zainul Falakh, S.Kom',
		// 'linkauthor'=>'https://www.facebook.com/kesatria.pertama',
		// 'frontmenu'=>array(
						// array(
							// 'text'=>'Home',
							// 'link'=>base_url().'index.php/site/',
						// ),
						// array(
							// 'text'=>'About',
							// 'link'=>base_url().'index.php/site/about',
						// ),
						// array(
							// 'text'=>'posts',
							// 'link'=>base_url().'index.php/site/posts',
						// ),
						// array(
							// 'text'=>'Contact',
							// 'link'=>base_url().'index.php/site/contact',
						// ),
		// ),
		// 'backmenu'=>$this->Menus_model->getDasMenu(),
		// 'topbackmenu'=>array(	array(
								// 'Name'=>'Log out',
								// 'Link'=>base_url().'index.php/exp/index/logout',
								// ),
		// ),
		// 'usersdata' => $this->Users_model->getUser($idusr),
		// 'act'=>'edit',
		// 'script'=>'',
		// );
		// $this->load->view('backendcontents/header',$data);
		// $this->load->view('backendcontents/sidebar');
		// $this->load->view('backendcontents/nav');
		// $this->load->view('backendcontents/formuser',$data);
		// $this->load->view('backendcontents/footer',$data);
	// }
	// public function add()
	// {
		
		
		
		// $data=array(
		// 'username'=>$this->u,
		// 'password'=>'ququm',
		// 'title'=>'Add User',
		// 'tahuncopy'=>date("Y"),
		// 'author'=>'Achmad Zainul Falakh, S.Kom',
		// 'linkauthor'=>'https://www.facebook.com/kesatria.pertama',
		// 'frontmenu'=>array(
						// array(
							// 'text'=>'Home',
							// 'link'=>base_url().'index.php/site/',
						// ),
						// array(
							// 'text'=>'About',
							// 'link'=>base_url().'index.php/site/about',
						// ),
						// array(
							// 'text'=>'posts',
							// 'link'=>base_url().'index.php/site/posts',
						// ),
						// array(
							// 'text'=>'Contact',
							// 'link'=>base_url().'index.php/site/contact',
						// ),
		// ),
		// 'backmenu'=>$this->Menus_model->getDasMenu(),
		// 'topbackmenu'=>array(	array(
								// 'Name'=>'Log out',
								// 'Link'=>base_url().'index.php/exp/index/logout',
								// ),
		// ),
		// /*'usersdata' => array(	'username'=>'',
								// 'password'=>'',
								// 'level'=>'',
								// 'email'=>'',),*/
		// 'act'=>'add',
		// );
		// $this->load->view('backendcontents/header',$data);
		// $this->load->view('backendcontents/sidebar');
		// $this->load->view('backendcontents/nav');
		// $this->load->view('backendcontents/formuser');
		// $this->load->view('backendcontents/footer');
	// }
	// public function posts()
	// {
		// switch ($this->uri->segment(3)) {
		  // case 'delete':
			// //hapus user
			// if ($_SESSION['ID']==$this->uri->segment(4)){
			
			// } else {
			// $this->db->where('ID', $this->uri->segment(4));
			// $this->db->delete('users');
			// }
			// break;
		  // case 'edit':
			// //update post
			// $data = array(
			// //'postlink' => htmlspecialchars($_POST['link']),
			// 'post_status'  => htmlspecialchars($_POST['publish']),
			// 'post_update'  => date("h:i:s d-m-Y"),
			// 'post_title' => htmlspecialchars($_POST['title']),
			// 'post_subtitle'  => htmlspecialchars($_POST['subtitle']),
			// 'post_content'  => $_POST['ck_editor'],
			// 'post_author' => $this->u,
			
			// );

			// $this->db->where('ID', $_POST['ID']);
			// $this->db->update('posts', $data);
			// header("Location:".base_url()."index.php/dashboard/posts");
			// break;
		  // case 'newPost':
			// //insert post
			// $data = array(
			// //'postlink' => htmlspecialchars($_POST['link']),
			// 'post_status'  => htmlspecialchars($_POST['publish']),
			// 'post_update'  => date("h:i:s d-m-Y"),
			// 'post_title' => htmlspecialchars($_POST['title']),
			// 'post_name' => strtolower(str_ireplace(" ","-",htmlspecialchars($_POST['title']))),
			// 'post_subtitle'  => htmlspecialchars($_POST['subtitle']),
			// 'post_content'  => $_POST['ck_editor'],
			// 'post_author' => $this->u,
			
			// );
			// /*$this->db->set('username', htmlspecialchars($_POST['username']));
			// $this->db->set('password', base64_encode(htmlspecialchars($_POST['password'])));
			// $this->db->set('level', htmlspecialchars($_POST['level']));
			// $this->db->set('email', htmlspecialchars($_POST['email']));*/
			// $this->db->insert('posts',$data);
			// //$postname=$this->Posts_model->getPost(strtolower(str_ireplace(" ","-",htmlspecialchars($_POST['title']))));
			// $this->db->set('post_link', base_url()."index.php/site/post/".strtolower(str_ireplace(" ","-",htmlspecialchars($_POST['title']))));
			// $this->db->where('post_name', strtolower(str_ireplace(" ","-",htmlspecialchars($_POST['title']))));
			// $this->db->update('posts');
			
			// break;
		  // default:
			
		// } 
		
		// $data=array(
		// 'username'=>$this->u,
		// //'password'=>'ququm',
		// 'title'=>'Users',
		// 'tahuncopy'=>date("Y"),
		// 'author'=>'Achmad Zainul Falakh, S.Kom',
		// 'linkauthor'=>'https://www.facebook.com/kesatria.pertama',
		// 'backmenu'=>$this->Menus_model->getDasMenu(),
		// 'topbackmenu'=>array(	array(
								// 'Name'=>'Log out',
								// 'Link'=>base_url().'index.php/exp/index/logout',
								// ),
		// ),
		// 'posts' => $this->Posts_model->getPosts(),
		// );
		// $this->load->view('backendcontents/header',$data);
		// $this->load->view('backendcontents/sidebar');
		// $this->load->view('backendcontents/nav');
		// $this->load->view('backendcontents/bcontents/tableposts');
		// $this->load->view('backendcontents/footer',$data);
	// }

	// public function newPost()
	// {
		// $data=array(
		// 'username'=>$this->u,
		// 'title'=>'Post',
		// 'tahuncopy'=>date("Y"),
		// 'author'=>'Achmad Zainul Falakh, S.Kom',
		// 'linkauthor'=>'https://www.facebook.com/kesatria.pertama',
		// 'backmenu'=>$this->Menus_model->getDasMenu(),
		// 'topbackmenu'=>array(	array(
								// 'Name'=>'Log out',
								// 'Link'=>base_url().'index.php/exp/index/logout',
								// ),
		// ),
		// 'post' => $this->Posts_model->getPost($this->uri->segment(3)),
		// 'act'=>'newPost',
		// );
		// $this->load->view('backendcontents/header',$data);
		// $this->load->view('backendcontents/sidebar');
		// $this->load->view('backendcontents/nav');
		// $this->load->view('backendcontents/bcontents/formPost');
		// $this->load->view('backendcontents/footer');
	// }
	// public function conSite()
	// {
		// $data=array(
		// 'username'=>$this->u,
		// 'title'=>'Config Site',
		// 'tahuncopy'=>date("Y"),
		// 'author'=>'Achmad Zainul Falakh, S.Kom',
		// 'linkauthor'=>'https://www.facebook.com/kesatria.pertama',
		// /*'frontmenu'=>array(
						// array(
							// 'text'=>'Home',
							// 'link'=>base_url().'index.php/site/',
						// ),
						// array(
							// 'text'=>'About',
							// 'link'=>base_url().'index.php/site/about',
						// ),
						// array(
							// 'text'=>'posts',
							// 'link'=>base_url().'index.php/site/posts',
						// ),
						// array(
							// 'text'=>'Contact',
							// 'link'=>base_url().'index.php/site/contact',
						// ),
		// ),*/
		// 'backmenu'=>$this->Menus_model->getDasMenu(),
		// 'topbackmenu'=>array(	array(
								// 'Name'=>'Log out',
								// 'Link'=>base_url().'index.php/exp/index/logout',
								// ),
		// ),
		// 'consite' => $this->db->get('consite'),
		// 'act'=>'config',
		// );
		// $this->load->view('backendcontents/header',$data);
		// $this->load->view('backendcontents/sidebar');
		// $this->load->view('backendcontents/nav');
		// $this->load->view('backendcontents/bcontents/formConfigSite');
		// $this->load->view('backendcontents/footer');
	// }
	// //menu
		// public function menus()
	// {
		// switch ($this->uri->segment(3)) {
		  // case 'deleteMenu':
			// foreach($this->Menus_model->getMenus() as $value){
                                            // if($this->uri->segment(4) == md5($value->ID)){
                                                // $id=$value->ID;
                                            // }
                                        // }
			// //hapus user
			// //$id=str_replace(' ','+',$this->uri->segment(4));
			// //$id=base64_decode($id);
			// $this->db->where('ID', $id);
			// $this->db->delete('menus');
			// break;
		  // case 'edit':
			// //update menu
			// $data = array(
			// 'text'  => htmlspecialchars($_POST['text']),
			// 'link'  => htmlspecialchars($_POST['link']),
			// );

			// $this->db->where('ID', $_POST['ID']);
			// $this->db->update('menus', $data);
			// header("Location:".base_url()."index.php/dashboard/menus");
			// break;
		  // case 'new':
			// //insert menu
			// $this->db->set('text', htmlspecialchars($_POST['text']));
			// $this->db->set('link', $_POST['link']);
			// $this->db->insert('menus');
			// break;
		  // default:
			
		// } 
		
		// $data=array(
		// 'username'=>$this->u,
		// 'title'=>'Menus',
		// 'tahuncopy'=>date("Y"),
		// 'author'=>'Achmad Zainul Falakh, S.Kom',
		// 'linkauthor'=>'https://www.facebook.com/kesatria.pertama',
		// 'backmenu'=>$this->Menus_model->getDasMenu(),
		// 'topbackmenu'=>array(	array(
								// 'Name'=>'Log out',
								// 'Link'=>base_url().'index.php/exp/index/logout',
								// ),
		// ),
		// 'menus' => $this->Menus_model->getMenus(),
		// );
		// $this->load->view('backendcontents/header',$data);
		// $this->load->view('backendcontents/sidebar');
		// $this->load->view('backendcontents/nav');
		// $this->load->view('backendcontents/bcontents/tablemenus');
		// $this->load->view('backendcontents/footer',$data);
	// }
	// public function editMenu($id)
	// {
		// $data=array(
		// 'username'=>$this->u,
		// 'title'=>'Menu',
		// 'tahuncopy'=>date("Y"),
		// 'author'=>'Achmad Zainul Falakh, S.Kom',
		// 'linkauthor'=>'https://www.facebook.com/kesatria.pertama',
		// 'backmenu'=>$this->Menus_model->getDasMenu(),
		// 'topbackmenu'=>array(	array(
								// 'Name'=>'Log out',
								// 'Link'=>base_url().'index.php/exp/index/logout',
								// ),
		// ),
		// 'menu' => $this->Menus_model->getMenu($this->uri->segment(3)),
		// 'act'=>'edit',
		// );
		// $this->load->view('backendcontents/header',$data);
		// $this->load->view('backendcontents/sidebar');
		// $this->load->view('backendcontents/nav');
		// $this->load->view('backendcontents/bcontents/formMenu');
		// $this->load->view('backendcontents/footer');
	// }
	// public function newMenu()
	// {
		// $data=array(
		// 'username'=>$this->u,
		// 'title'=>'Menu',
		// 'tahuncopy'=>date("Y"),
		// 'author'=>'Achmad Zainul Falakh, S.Kom',
		// 'linkauthor'=>'https://www.facebook.com/kesatria.pertama',
		// 'backmenu'=>$this->Menus_model->getDasMenu(),
		// 'topbackmenu'=>array(	array(
								// 'Name'=>'Log out',
								// 'Link'=>base_url().'index.php/exp/index/logout',
								// ),
		// ),
		// 'act'=>'new',
		// );
		// $this->load->view('backendcontents/header',$data);
		// $this->load->view('backendcontents/sidebar');
		// $this->load->view('backendcontents/nav');
		// $this->load->view('backendcontents/bcontents/formMenu');
		// $this->load->view('backendcontents/footer');
	// }
	// //gallery
		// public function gallery()
	// {
		// switch ($this->uri->segment(3)) {
		  // case 'deleteimg':
			// foreach($this->Menus_model->getMenus() as $value){
                                            // if($this->uri->segment(4) == md5($value->ID)){
                                                // $id=$value->ID;
                                            // }
                                        // }
			// //hapus user
			// //$id=str_replace(' ','+',$this->uri->segment(4));
			// //$id=base64_decode($id);
			// $this->db->where('ID', $id);
			// $this->db->delete('menus');
			// break;
		  // case 'editimg':
			// //update menu
			// $data = array(
			// 'text'  => htmlspecialchars($_POST['text']),
			// 'link'  => htmlspecialchars($_POST['link']),
			// );

			// $this->db->where('ID', $_POST['ID']);
			// $this->db->update('menus', $data);
			// header("Location:".base_url()."index.php/dashboard/menus");
			// break;
		  // case 'newimg':
			// //insert menu
			// $this->db->set('text', htmlspecialchars($_POST['text']));
			// $this->db->set('link', $_POST['link']);
			// $this->db->insert('menus');
			// break;
		  // default:
			
		// } 
		
		// $data=array(
		// 'username'=>$this->u,
		// 'title'=>'Gallery',
		// 'tahuncopy'=>date("Y"),
		// 'author'=>'Achmad Zainul Falakh, S.Kom',
		// 'linkauthor'=>'https://www.facebook.com/kesatria.pertama',
		// 'backmenu'=>$this->Menus_model->getDasMenu(),
		// 'topbackmenu'=>array(	array(
								// 'Name'=>'Log out',
								// 'Link'=>base_url().'index.php/exp/index/logout',
								// ),
		// ),
		// 'menus' => $this->Menus_model->getMenus(),
		// );
		// $this->load->view('backendcontents/header',$data);
		// $this->load->view('backendcontents/sidebar');
		// $this->load->view('backendcontents/nav');
		// $this->load->view('backendcontents/bcontents/tablemenus');
		// $this->load->view('backendcontents/footer',$data);
	// }
	// public function blogger()
	// {
		// $data = array(
				// 'title'   => 'Daftar Pendaftar',
				// 'menu' => '<li><a class="pull-left" href="login/logout">Logout</a></li>',
		// );
		// $this->load->view('page/head', $data);
		// $this->load->view('page/header');
		// $this->load->view('contents/blogger');
		// $this->load->view('page/footer');
	// }
	
	// public function pagging()
	// {
		// $this->load->library('pagination');

		// $config['base_url'] = base_url().'smkti/dashboard/dashdashboard.html';
		// $config['total_rows'] = $this->pendaftar->getCount(); //total data
		// $config['per_page'] = 1; //data yang ditampilkan perhalaman

		// $this->pagination->initialize($config);

		// echo $this->pagination->create_links();
	// }
	
}
