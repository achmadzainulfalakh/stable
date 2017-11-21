<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistic extends CI_Controller {

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
		$this->load->database();
		
		//pengecekan login
		if(!$this->login_model->username()){
			redirect('Page_not_found');
		}
	}
	public function index()
	{		

		$data=array(
					'tanggal_kunjungan'=> date('jS \of F Y'),
					'jam_kunjungan'=> date('h:i:s A'),
				);
		$this->db->insert('kunjungan', $data);
	}
	public function count_all()
	{		

		$data=array(
					'tanggal_kunjungan'=> date('jS \of F Y'),
					'jam_kunjungan'=> date('h:i:s A'),
				);
		echo json_encode($this->db->count_all('kunjungan'));
	}
	public function count_group_byjam()
	{		

		$data=array(
					'tanggal_kunjungan'=> date('jS \of F Y'),
					'jam_kunjungan'=> date('h:i:s A'),
				);
		$q=$this->db->query('SELECT jam_kunjungan,tanggal_kunjungan,count(*) as n FROM `kunjungan` group by `tanggal_kunjungan`');
		echo json_encode($q->result());
	}
	public function all_data()
	{		

		$data=array(
					'tanggal_kunjungan'=> date('jS \of F Y'),
					'jam_kunjungan'=> date('h:i:s A'),
				);
		$q=$this->db->query('SELECT * FROM `kunjungan` ');
		echo json_encode($q->result());
	}

}
