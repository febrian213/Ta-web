<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('backend/pegawai/model_update','',TRUE);
		$this->Log_model->is_logged('backend/pegawai/home');
		$this->load->library('session');
	}
	public function updatePemesan($nama_pemesan)
	{
		$id_pemesan = $this->input->post('id_pemesan');
		$nama_pmsn = $this->input->post('nama_pemesan');
		$alamat_email = $this->input->post('alamat_email');
		$no_hp = $this->input->post('no_hp');
		$jns_kamar = $this->input->post('jns_kamar');
		$jml_tamu_dewasa = $this->input->post('jml_tamu_dewasa');
		$jml_tamu_anak = $this->input->post('jml_tamu_anak');
		$jml_kamar = $this->input->post('jml_kamar');
		$tgl_cekin = $this->input->post('tgl_cekin');
		$tgl_cekout = $this->input->post('tgl_cekout');
		
		$update = array(
			'nama_pemesan' => $nama_pmsn,
			'alamat_email' => $alamat_email,
			'no_hp' => $no_hp,
			'jns_kamar' => $jns_kamar,
			'jml_tamu_dewasa' => $jml_tamu_dewasa,
			'jml_tamu_anak' => $jml_tamu_anak,
			'jml_kamar' => $jml_kamar,
			'tgl_cekin' => $tgl_cekin,
			'tgl_cekout' => $tgl_cekout
		);
		
		$this->model_update->updatePemesan($update, $id_pemesan);
		redirect('backend/pegawai/home/update/'.$id_pemesan);
	}
	public function updateTamu($no_ktp)
	{
		$nama = $this->input->post('nama');
		$ktp = $this->input->post('no_ktp');
		$id_pemesan = $this->input->post('id_pemesan');
		
		$update = array(
			'nama' => $nama,
			'no_ktp' => $ktp
		);
		
		$this->model_update->updateTamu($update, $no_ktp);
		redirect('backend/pegawai/home/update/'.$id_pemesan);
	}
}