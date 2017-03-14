<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function set_post($data){		
		$post = $this->db->insert('posts', $data);
		if (!$post) {
			return FALSE;
		} else {
			return true;	
		}		
	}
	function update_post($id,$data){	
		$this->db->where('ID', $id);
		$post =$this->db->update('posts', $data);
		if (!$post) {
			return FALSE;
		} else {
			return true;	
		}		
	}
	function get_post_by($data){		
		$post = $this->db->get_where('posts', $data);
		if (!$post) {
			return FALSE;
		} else {
			return $post->row();	
		}		
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
		$query=$this->db->query("select * from posts where post_type='page'");
		return $query->result();		
	}
	
	
	/* end fungsi restrict */
}