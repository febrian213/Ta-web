<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_data_tamu extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function viewIndex()
	{
		$this->db->select('*');
		$get_selwork = $this->db->get('tamu');
		return $get_selwork->result();
	}
	function delete() {
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
			$this->db->where('id_tamu', $delete[$i]);
			$this->db->delete('tamu');
		}
	}
	function seacrhData(){
		$data = $this->input->POST ('search');
		$this->db->where('id_pemesan', $data);
		$query = $this->db->get ('tamu');
		return $query->result(); 
 	}
}
