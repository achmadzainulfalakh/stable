<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('settings_model','posts_model'));
		$this->load->dbutil();
		
		add_shortcode( 'footag', 'footag_func' );
	}
	//halaman home
	public function index()
	{
		//mempercepat halaman dengan cace
		//$this->output->cache(300);
		// Deletes cache for the currently requested URI
		$this->output->delete_cache();
		// Deletes cache for /foo/bar
		//$this->output->delete_cache('/foo/bar');
		$data=array(
                        'imgheader'=>base_url().'assets/upload/home-bg.jpg',
			'title'=>'HOME',
			'subtitle'=>'',
			'chaptca'=>$this->get_chaptca(4).' '.$this->get_chaptca(3).' '.$this->get_chaptca(2),
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
		$this->load->view('frontendcontents/head',$data);
		$this->load->view('frontendcontents/header');
		$this->load->view('frontendcontents/stuckmenu');
		$this->load->view('frontendcontents/counter');
		///$this->load->view('frontendcontents/slidecoursel');
		$this->load->view('frontendcontents/aboutus');
		$this->load->view('frontendcontents/product');
		$this->load->view('frontendcontents/weoffer');
		// $this->load->view('frontendcontents/contactus');
		$this->load->view('frontendcontents/contactus_offline');
		$this->load->view('frontendcontents/ourclient');
		///$this->load->view('frontendcontents/emailconfirm');
		$this->load->view('frontendcontents/policy');
		//$this->load->view('frontendcontents/home');
		$this->load->view('frontendcontents/footer');	
	}
	public function mail()
	{
	if($_POST){
	
		$from_email = "your@example.com"; 
         $to_email = "kesatrianglungupertama@gmail.com"; 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Your Name'); 
         $this->email->to($to_email);
         $this->email->subject('Email Test'); 
         $this->email->message('Testing the email class.'); 
		 
		if(!$this->email->send())
		{
		echo "Mailer Error: " ;//. $this->email->ErrorInfo;
		}
		else
		{
		echo "Message has been sent";// . $this->email->ErrorInfo;
		}
		}
		
	}
	//send mail
	public function sendmail()
	{
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com'; //change this
		$config['smtp_port'] = '465';
		$config['smtp_user'] = 'kesareianglungupertama@gmail.com'; //change this
		$config['smtp_pass'] = 'sikatgigipepsoden'; //change this
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard
		
		$this->load->library('email', $config); // load email library
		$this->email->from('user@gmail.com', 'sender name');
		$this->email->to('kesareianglungupertama@gmail.com');
		$this->email->cc('test2@gmail.com'); 
		$this->email->subject('Your Subject');
		$this->email->message('Your Message');
		$this->email->attach('/path/to/file1.png'); // attach file
		$this->email->attach('/path/to/file2.pdf');
		$this->email->send();
		
//		if ($this->email->send())
//			echo "Mail Sent!";
//		else
//			echo "There is error in sending mail!";
	}
	public function mailtwo()
	{
	if($_POST){
	
		$this->load->library('phpmailer');
		$this->load->library('smtp');
		$mail = $this->phpmailer;
		$mail->IsSMTP(); // send via SMTP
		//IsSMTP(); // send via SMTP
		$mail->SMTPSecure = 'tls';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->Username = "kesatrianglungupertama@gmail.com"; 
		$mail->Password = "sikatgigipepsoden"; 
		$webmaster_email = $this->security->xss_clean($_POST['email']); //Reply to this email ID
		$email="kesatrianglungupertama@gmail.com"; // Recipients email ID
		$name="Admin situs"; // Recipient's name
		$mail->From = $webmaster_email;
		$mail->FromName = "stable.me";
		$mail->AddAddress($email,$name);
		$mail->AddReplyTo($webmaster_email,$this->security->xss_clean($_POST['name']));
		$mail->WordWrap = 50; // set word wrap
		
		//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
		//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
		$mail->IsHTML(true); // send as HTML
		$mail->Subject = $this->security->xss_clean($_POST['phone']);
		$mail->Body = $_POST['message']; //HTML Body
		$mail->AltBody = $this->security->xss_clean($_POST['message']); //Text Body
		if(!$mail->Send())
		{
		echo "Mailer Error: " . $mail->ErrorInfo;
		}
		else
		{
		echo "Message has been sent";
		header('Location: '.base_url());
		}
		}
		$data=array(
			'cdn_url'=>'http://cdn.stable.me/',
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
		$this->load->view('frontendcontents/head',$data);
		$this->load->view('frontendcontents/header');
		$this->load->view('frontendcontents/stuckmenu');
		$this->load->view('frontendcontents/aboutus');
		$this->load->view('frontendcontents/footer');
	}
	public function mailthree()
	{
	if($_POST){
	
		$this->load->library('phpmailer');
		$this->load->library('smtp');
		$mail = $this->phpmailer;
		$mail->IsSMTP(); // send via SMTP
		//IsSMTP(); // send via SMTP
		$mail->SMTPSecure = 'tls';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->Username = "kesatrianglungupertama@gmail.com"; 
		$mail->Password = "sikatgigipepsoden"; 
		$webmaster_email = $this->security->xss_clean($_POST['email']); //Reply to this email ID
		$email="kesatrianglungupertama@gmail.com"; // Recipients email ID
		$name="Admin situs"; // Recipient's name
		$mail->From = $webmaster_email;
		$mail->FromName = "stable";
		$mail->AddAddress($email,$name);
		$mail->AddReplyTo($webmaster_email,$this->security->xss_clean($_POST['name']));
		$mail->WordWrap = 50; // set word wrap
		
		//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
		//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
		$mail->IsHTML(true); // send as HTML
		$mail->Subject = $this->security->xss_clean($_POST['phone']);
		$mail->Body = $_POST['message']; //HTML Body
		$mail->AltBody = $this->security->xss_clean($_POST['message']); //Text Body
		if(!$mail->Send())
		{
		echo "Mailer Error: " . $mail->ErrorInfo;
		
		}
		else
		{
		echo "Message has been sent";

		
		//header('Location: '.base_url());
		}
		}
		$data=array(
			'cdn_url'=>'http://cdn.stable.me/',
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
		$this->load->view('frontendcontents/head',$data);
		$this->load->view('frontendcontents/header');
		$this->load->view('frontendcontents/stuckmenu');
		$this->load->view('frontendcontents/aboutus');
		$this->load->view('frontendcontents/footer');
	}
	public function getformemail(){
        $data['chaptca'] = $this->get_chaptca(4).' '.$this->get_chaptca(3).' '.$this->get_chaptca(2);
        $this->load->view('frontendcontents/head',$data);
		$this->load->view('frontendcontents/header');
		$this->load->view('frontendcontents/stuckmenu');
		$this->load->view('frontendcontents/form_login');   
		$this->load->view('frontendcontents/footer');
     }
	private function get_chaptca($param) // method pembuat chapta
       {
        $alphabet   = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $num        = range(0, 35);
        $result     = '';
         shuffle($num);
         for ($x = 0; $x < $param; $x++)
          {
            $result .= substr($alphabet, $num[$x], 1);
          }
          return $result;
      }
	public function cek_mail(){
      if (strtolower($this->input->post('txt_chaptca_real')) == strtolower($this->input->post('txt_chaptca')))
        {
            $this->mailthree();
		}
		else{
			$this->session->set_flashdata('info','Kami Menduga Kamu bukan Manusia !!!');
            redirect(base_url());
		}
   }
   	public function cek_mail_googlerecaptcha(){
      //require_once('recaptchalib.php');
	  $privatekey = "6LcvhAwUAAAAAOT54uOYMJoOPUHE21XWm6cHU4UJ";
	  $resp = $this->recaptcha->recaptcha_check_answer ($privatekey,
									$_SERVER["REMOTE_ADDR"],
									$_POST["recaptcha_challenge_field"],
									$_POST["recaptcha_response_field"]);

	  if (!$resp->is_valid) {
		// What happens when the CAPTCHA was entered incorrectly
		die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
			 "(reCAPTCHA said: " . $resp->error . ")");
	  } else {
		// Your code here to handle a successful verification
		//$this->mailthree();
		echo "hallo";
	  }
   }
     public function getResponseCaptcha()
  {
      $response = $this->recaptcha->verifyResponse($_POST['g-recaptcha-response']);
      if ($response['success'])
      {
			return true;
			
			// Your code here to handle a successful verification
			$this->index();
      }
      else
      {
          $this->form_validation->set_message('getResponseCaptcha', ' <div class="alert alert-danger" style="font-family:Roboto">
                                                                          <i class="fa fa-exclamation-circle"></i> %s harus diisi.
                                                                      </div>' );
          return false;
      }
  }
   	//halaman policy
	public function policy()
	{

		$data=array(
			'cdn_url'=>'http://cdn.stable.me/',
			'imgheader'=>base_url().'assets/upload/home-bg.jpg',
			'title'=>'HOME',
			'subtitle'=>'',
			'chaptca'=>$this->get_chaptca(4).' '.$this->get_chaptca(3).' '.$this->get_chaptca(2),
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
		$this->load->view('frontendcontents/head',$data);
		$this->load->view('frontendcontents/header');
		$this->load->view('frontendcontents/stuckmenu');
		$this->load->view('frontendcontents/policy');
		$this->load->view('frontendcontents/footer');	
	}
	public function page_preview($id)
	{
		
		
		$data=array(
            'imgheader'=>base_url().'assets/upload/home-bg.jpg',
			'title'=>'HOME',
			'subtitle'=>'',
			'chaptca'=>$this->get_chaptca(4).' '.$this->get_chaptca(3).' '.$this->get_chaptca(2),
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
			'ID'=>$id,
		);
		$this->load->view('frontendcontents/head',$data);
		// $this->load->view('frontendcontents/header');
		// $this->load->view('frontendcontents/stuckmenu');
		$this->load->view('frontendcontents/dinamis_page');
		$this->load->view('frontendcontents/footer');	
		
		// $this->load->view('backendcontents/head', $data);
		// $this->load->view('backendcontents/header');
		// $this->load->view('frontendcontents/dinamis_page');
		//$this->load->view('backendcontents/footer');
		// $this->load->view('backendcontents/foot');
	}
	public function pesan()
	{
		if($this->input->post('txt_chaptca')){
			
			if ($this->input->post('txt_chaptca_real')==$this->input->post('txt_chaptca')) {
				$dataPost = array(
						'name' => htmlentities($this->input->post('name')),
						'email' => htmlentities($this->input->post('email')),
						'phone' => htmlentities($this->input->post('phone')),
						'message' =>htmlentities($this->input->post('message')),
					);
			}

			$this->load->database();
			$this->db->insert('pesan', $dataPost);
			
			if (!$dataPost) {
				print json_encode('gagal mengirim pesan.');
				redirect(base_url());
				// $this->index('Gagal');
			} else {
				print json_encode('berhasil mengirim pesan.');
				redirect(base_url());
				// $this->index('Sukses');
			}

		}
		
	}
	
	
	
	
	

}
