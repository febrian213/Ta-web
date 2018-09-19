<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_akun_pegawai extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function viewIndex()
	{
		$this->db->where('jabatan', 'pegawai');
		$get_selwork = $this->db->get('login');
		return $get_selwork->result();
	}
	function delete() {
			$delete = $this->input->post('msg');
			for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('login');
			}
	}
	public function insert($data)
  	{
    	$this->db->set($data);
    	return $this->db->insert('login');
  	}
}
