<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {
	function check($username, $password, $jabatan)
	{
	    $this->db->where('username',$username);
	    $this->db->where('password',$password);
	    $this->db->where('jabatan', $jabatan);
		$this->db->from('login');
		$get = $this->db->count_all_results();
		return $get;
	}
}
?>