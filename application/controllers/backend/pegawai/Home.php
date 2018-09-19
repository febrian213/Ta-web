<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('backend/pegawai/model_home','',TRUE);
		$this->Log_model->is_logged('backend/pegawai/home');
		$this->load->library('session');
	}
	public function index()
	{
		$data = array(
			'view' => $this->model_home->viewIndex()
		);
		$this->load->view('backend/pegawai/home', $data);
	}
	public function search() {
       $data['view']=$this->model_home->seacrhData();
       if($data['view']==null) {
          $this->session->set_flashdata('messageType','error');
	      $this->session->set_flashdata('msgfalse','maaf data yang anda cari tidak ada atau keywordnya salah');
          $this->load->view('backend/pegawai/home',$data);
          }
          else {
             $this->load->view('backend/pegawai/home',$data);
		}
	}
	public function update($id_pemesan)
	{
		if(empty($id_pemesan)) show_404();
		$data = array(
			'edit' => $this->model_home->viewPemesan($id_pemesan),
			'tamu' => $this->model_home->viewTamu($id_pemesan)
		);
		$this->load->view('backend/pegawai/update', $data);
	}
	public function delete($id_pemesan)
	{
		if(empty($id_pemesan)) show_404();
		$this->model_home->delete($id_pemesan);
		redirect('backend/pegawai/home');
	}
}
