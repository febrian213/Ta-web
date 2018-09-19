<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('backend/login_model','',true);
	}
 	public function index()
	{
	  if($this->Log_model->is_logged('login') OR	$this->Log_model->is_logged_('login')){
      show_404();
    }  
	  $this->load->view('backend/login');
  }
  public function check()
  {
   	if(!$_POST) show_404();

	  $username = $this->input->post('username');
   	$password = $this->input->post('password');
   	$jabatan = $this->input->post('jabatan');
    
	  $this->form_validation->set_rules('username','username','required');
  	$this->form_validation->set_rules('password','password','required');
    
	  if($this->form_validation->run()){
   	  $get = $this->login_model->check($username,$password,$jabatan);
    		if($get){
       		$get = $get[0];
	       	if($jabatan=='manager'){
	       		$reg = array(
            'manager' => true,
            'username' => $username,
            'password' => $password,
            'jabatan' => $jabatan
          );
            $this->session->set_userdata($reg);
            redirect('backend/manager/Home');
	       	}elseif($jabatan=='pegawai'){
            $reg = array(
            'pegawai' => true,
            'username' => $username,
            'password' => $password,
            'jabatan' => $jabatan
          );
            $this->session->set_userdata($reg);
	       		redirect('backend/pegawai/Home');
	       	}
		}else{
       		$this->session->set_flashdata('messageType','error');
	       	$this->session->set_flashdata('msgfalse','wrong username address or password!');
   	    	redirect('backend/Login');
     		}
	  }else{
   	  $this->session->set_flashdata('msgfalse', 'make sure all form is not empty!');
	     redirect('backend/Login');
   	}
	}
	public function quit()
  {
      $userdata = array(
      	'pegawai' => '',
        'manager' => '',
      	'username' => '',
        'password' => '',
        'jabatan' => ''
      ); 
      $this->session->set_userdata($userdata);
      $this->session->set_flashdata('messageType','passed');
      $this->session->set_flashdata('msgtrue','you has been logged out!');
      redirect('backend/Login');
  }
}
?>