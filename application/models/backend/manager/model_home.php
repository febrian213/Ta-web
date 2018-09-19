<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_home extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function viewIndex()
	{
		$this->db->select('*');
		$get = $this->db->get('pemesan');
		return $get->result();
	}
	function seacrhData(){
		$data = $this->input->POST ('search');
		$this->db->where('id_pemesan', $data);
		$query = $this->db->get ('pemesan');
		return $query->result(); 
 	}
 	function delete() {
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
			$this->db->where('id_pemesan', $delete[$i]);
			$this->db->delete('pemesan');
		}
	}
}
