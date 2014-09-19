<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function tiket($tiket){
		$this->db->where('tiket',$tiket);
		$query=$this->db->get('tiket');
		return $query->result();
	}

	function jurnal(){

		$this->db->where('status',"0");
		$this->db->or_where('status',"2");
		$this->db->or_where('status',"1");
		$query=$this->db->get('tiket');
		return $query->result();
	}


	//PAGE
	public function pending($num,$offset) {
		$query=$this->db->query('SELECT * FROM tiket laporan WHERE status=0 ORDER BY timestamp DESC LIMIT '.$num.' OFFSET '.$offset.'');
		return $query->result();
	}

	public function hitung_pending() {
		$query=$this->db->query('SELECT COUNT(tiket) AS hasil FROM tiket laporan WHERE status=0');
		$row = $query->row();
		return $row->hasil;
	}

	public function diterima($num,$offset) {
		$query=$this->db->query('SELECT * FROM tiket laporan WHERE status=1 ORDER BY timestamp DESC LIMIT '.$num.' OFFSET '.$offset.'');
		return $query->result();
	}

	public function hitung_diterima() {
		$query=$this->db->query('SELECT COUNT(tiket) AS hasil FROM tiket laporan WHERE status=1');
		$row = $query->row();
		return $row->hasil;
	}


	public function ditolak($num,$offset) {
		$query=$this->db->query('SELECT * FROM tiket laporan WHERE status=2 ORDER BY timestamp DESC LIMIT '.$num.' OFFSET '.$offset.'');
		return $query->result();
	}

	public function hitung_ditolak() {
		$query=$this->db->query('SELECT COUNT(tiket) AS hasil FROM tiket laporan WHERE status=2');
		$row = $query->row();
		return $row->hasil;
	}

	public function cari($num,$offset,$keyword) {
		$query=$this->db->query('SELECT * FROM tiket laporan WHERE tiket LIKE "'.$keyword.'" OR nim LIKE "'.$keyword.'" OR nama LIKE "%'.$keyword.'%" OR judul LIKE "%'.$keyword.'%" ORDER BY timestamp DESC LIMIT '.$num.' OFFSET '.$offset.'');
		return $query->result();
	}

	public function hitung_cari($keyword) {
		$query=$this->db->query('SELECT COUNT(tiket) AS hasil FROM tiket laporan WHERE tiket LIKE "'.$keyword.'" OR nim LIKE "'.$keyword.'" OR nama LIKE "%'.$keyword.'%" OR judul LIKE "%'.$keyword.'%" ');
		$row = $query->row();
		return $row->hasil;
	}
	public function terima($tiket){
		$this->db->query('UPDATE tiket SET status=1 where tiket='.$tiket.'');
	}

	public function tolak($tiket){
		$this->db->query('UPDATE tiket SET status=2 where tiket='.$tiket.'');
	}

	public function cancel($tiket){
		$this->db->query('UPDATE tiket SET status=0 where tiket='.$tiket.'');
	}

	public function hapus($tiket){
		$this->db->query('UPDATE tiket SET status=4 where tiket='.$tiket.'');
	}

}