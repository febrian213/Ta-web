<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_input extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	public function inputPemesan($insert)
  	{
    	$this->db->set($insert);
    	return $this->db->insert('pemesan');
  	}
  	public function inputTamu($insert)
  	{
    	$this->db->set($insert);
    	return $this->db->insert('tamu');
  	}
    public function viewTamu($no_hp)
    {
      $this->db->where('no_hp', $no_hp);
      $get_selwork = $this->db->get('pemesan');
      return $get_selwork->result();
  }
}