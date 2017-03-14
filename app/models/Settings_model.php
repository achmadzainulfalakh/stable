<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function get_copyr(){		
		return 'Copyright &copy 2017 - stable.com';		
	}
	function get_favicon()
	{
	return base_url().'assets/images/favicon.png';
	}

	function get_description()
	{
	return 'Lorem Ipsum, Ini adalah deskripsi situs.';
	}

	function get_author()
	{
	//Author / Pemilik Situs
	return 'Achmad Zainul Falakh';
	}
	function get_title()
	{
	//Page title
	return 'Dashboard';
	}
	function get_subtitle()
	{
		//Page subtitle
		if($this->uri->segment(2)){ 
			return " - " . $this->uri->segment(2); 
		}
	}
	//get setting dari table options
	function get_options($str){		
		$this->db->select('*');
		$this->db->from('options');
		$this->db->where('option_name',$str);
		$query=$this->db->get();
		$row=$query->row();
		return $row->option_value;		
	}
	//update setting dari table options
	function update_options($value,$valuewhere){
		$this->db->set('option_value', $value);
		$this->db->where('option_name', $valuewhere);
		$this->db->update('options');
	}
	
	//get page dari table posts
	function get_page_posttitle(){		
		$this->db->select('*');
		$this->db->from('posts');
		$this->db->where('post_type','page');
		$query=$this->db->get();
		$row=$query->row();
		return $row->post_title;		
	}
	function get_top_menu(){		
		return array(
						'<li><a id="resetBtn" class="pull-left" href="#">Reset Pendaftar</a></li>',
						'<li><a class="pull-left" href="login/logout">Logout</a></li>',
					);	
	}
	function get_side_menu(){		
		return array(
						'<li><a id="resetBtn" class="pull-left" href="#">Reset Pendaftar</a></li>',
						'<li><a class="pull-left" href="login/logout">Logout</a></li>',
					);
	}
	
	/* end fungsi restrict */
}