<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_akun_pegawai extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('backend/manager/model_akun_pegawai','',TRUE);
		$this->Log_model->is_logged_('backend/manager/home');
		$this->load->library('session');
	}
	public function index()
	{
		$data = array(
			'view' => $this->model_akun_pegawai->viewIndex()
		);
		$this->load->view('backend/manager/data_akun_pegawai', $data);
	}
	function delete() {;
			$this->model_akun_pegawai->delete();
			redirect('backend/manager/data_akun_pegawai');
	}
	public function viewInsert()
	{
		$this->load->view('backend/manager/insert');
	}
	public function insert()
	{
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
		
			$data = array(
				'id' => $id,
				'nama' => $nama,
				'username' => $username,
				'password' => $password,
				'jabatan' => 'pegawai'

			);

		if(empty($username) OR empty($nama) OR empty($password)){
			$this->session->set_flashdata('msgfalse','data tidak boleh kosong.');
			redirect('backend/manager/data_akun_pegawai/viewInsert');
		}else{
			$this->model_akun_pegawai->insert($data);
			$this->session->set_flashdata('msgtrue','data '.$nama.' berhasil di input');	
			redirect('backend/manager/data_akun_pegawai');
		}
	}
	/*public function search() {
       $data['view']=$this->model_home->seacrhData();
       if($data['view']==null) {
          echo "maaf data yang anda cari tidak ada atau keywordnya salah";
          print anchor('backend/pegawai/home','kembali');
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
	}*/
}
