<?php if ( ! defined('BASEPATH')) exit ('No direct access script allowed');

class model_update extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	public function updatePemesan($update, $id_pemesan)
	{
		$this->db->set($update);	
		$this->db->where('id_pemesan', $id_pemesan);		
		$this->db->update('pemesan');
  	}
  	public function updateTamu($update, $no_ktp)
	{
		$this->db->set($update);	
		$this->db->where('no_ktp', $no_ktp);		
		$this->db->update('tamu');
  }
}