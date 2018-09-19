<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_home extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	public function viewIndex()
	{
		$this->db->where('tgl_cekout >', date('Y-m-d'));
		$get_selwork = $this->db->get('pemesan');
		return $get_selwork->result();
	}
	 function seacrhData(){
		$data = $this->input->POST ('search');
		$this->db->where('id_pemesan', $data);
		$query = $this->db->get ('pemesan');
		return $query->result(); 
 	}
	public function viewPemesan($id_pemesan)
	{
		$this->db->where('id_pemesan', $id_pemesan);
		$get_selwork = $this->db->get('pemesan');
		return $get_selwork->result();
	}
	public function viewTamu($id_pemesan)
	{
		$this->db->where('id_pemesan', $id_pemesan);
		$get_selwork = $this->db->get('tamu');
		return $get_selwork->result();
		
	}
	public function delete($id_pemesan)
	{
		$this->db->where('id_pemesan', $id_pemesan);
		$this->db->delete('pemesan');
	}
}
