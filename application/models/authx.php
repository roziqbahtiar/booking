<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authx extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function login($username,$password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->from('user');
		return $this->db->count_all_results();
	}

	function jurnal(){
		$this->db->where('status',"0");
		$this->db->or_where('status',"2");
		$this->db->or_where('status',"1");
		$query=$this->db->get('tiket');
		return $query->result();
	}


}