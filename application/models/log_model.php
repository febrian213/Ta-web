<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Log_model extends CI_Model {
  public function is_logged($position)
  {
    $redirect = ($position == 'login')? 'backend/pegawai/Home' : 'backend/login';
    $condition = ($position == 'login')? !$this->session->userdata('pegawai') : $this->session->userdata('pegawai');
    if(!$condition){
      redirect($redirect); 
    }
  }
  public function is_logged_($position)
  {
    $redirect = ($position == 'login')? 'backend/manager/Home' : 'backend/login';
    $condition = ($position == 'login')? !$this->session->userdata('manager') : $this->session->userdata('manager');
    if(!$condition){
      redirect($redirect); 
    }
  }
}
?>