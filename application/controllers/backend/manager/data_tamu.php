<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_tamu extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('backend/manager/model_data_tamu','',TRUE);
		$this->Log_model->is_logged_('backend/manager/home');
		$this->load->library('session');
	}
	public function index()
	{
		$data = array(
			'view' => $this->model_data_tamu->viewIndex()
		);
		$this->load->view('backend/manager/data_tamu', $data);
	}
	function delete() {;
			$this->model_data_tamu->delete();
			redirect('backend/manager/data_tamu');
	}
	public function search_tamu() {
       $data['view']=$this->model_data_tamu->seacrhData();
       if($data['view']==null) {
          $this->session->set_flashdata('messageType','error');
	      $this->session->set_flashdata('msgfalse','maaf data yang anda cari tidak ada atau keywordnya salah');
          $this->load->view('backend/pegawai/home',$data);
          }
          else {
             $this->load->view('backend/manager/data_tamu',$data);
		}
	}
}
