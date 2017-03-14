<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_model extends CI_Model {
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
	function update_post($where,$data){	
		$this->db->where($where);
		$post =$this->db->update('posts', $data);
		if (!$post) {
			return FALSE;
		} else {
			return true;	
		}		
	}
	function set_pesan_read($where,$data){		
		$this->db->where($where);
		$data =$this->db->update('pesan', $data);
		if (!$data) {
			return FALSE;
		} else {
			return true;	
		}			
	}
	function del_pesan($where){		
		$this->db->where($where);
		$data =$this->db->delete('pesan');
		if (!$data) {
			return FALSE;
		} else {
			return true;	
		}			
	}
	function get_pesan($data){		
		$data = $this->db->get_where('pesan', $data);
		if (!$data) {
			return FALSE;
		} else {
			return $data->row();	
		}		
	}
	function get_pesan_unread($data){		
		$data = $this->db->get_where('pesan', $data);
		if (!$data) {
			return FALSE;
		} else {
			return $data->result();	
		}		
	}
	function get_pesan_orderby($orderby){		
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->order_by($orderby);
		$data=$this->db->get();
		if (!$data) {
			return FALSE;
		} else {
			return $data->result();	
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
	function get_posts_filterby($data){		
		$post = $this->db->get_where('posts', $data);
		if (!$post) {
			return FALSE;
		} else {
			return $post->result();	
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
	//delete post
	function del_post_by($data){		
		$this->db->where($data);
		$this->db->delete('posts');
				
	}
	//get page dari table posts
	function get_post_orderby($where,$orderby){		
		$this->db->select('*');
		$this->db->from('posts');
		$this->db->where($where);
		$this->db->order_by($orderby);
		$query=$this->db->get();
		return $query->result();			
	}
	
	
	/* end fungsi restrict */
}