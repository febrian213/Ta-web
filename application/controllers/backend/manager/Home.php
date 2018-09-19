<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('backend/manager/model_home','',TRUE);
		$this->Log_model->is_logged_('backend/manager/home');
		$this->load->library('session');
	}
	public function index()
	{
		$data = array(
			'view' => $this->model_home->viewIndex()
		);
		$this->load->view('backend/manager/home', $data);
	}
	public function search() {
       $data['view']=$this->model_home->seacrhData();
       if($data['view']==null) {
          $this->session->set_flashdata('messageType','error');
	      $this->session->set_flashdata('msgfalse','maaf data yang anda cari tidak ada atau keywordnya salah');
          $this->load->view('backend/pegawai/home',$data);
          }
          else {
             $this->load->view('backend/manager/home',$data);
		}
	}
	function delete() {;
			$this->model_home->delete();
			redirect('backend/manager/home');
	}
}
