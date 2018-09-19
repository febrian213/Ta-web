<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_input','',TRUE);
		$this->load->helper('email');
		$this->load->library('session');
	}
	public function inputPemesan()
	{
		$id_pemesan = $this->input->post('id_pemesan');
		$nama_pemesan = $this->input->post('nama_pemesan');
		$alamat_email = $this->input->post('alamat_email');
		$no_hp = $this->input->post('no_hp');
		$jns_kamar = $this->input->post('jns_kamar');
		$jml_tamu_dewasa = $this->input->post('jml_tamu_dewasa');
		$jml_tamu_anak = $this->input->post('jml_tamu_anak');
		$jml_kamar = $this->input->post('jml_kamar');
		$tgl_cekin = $this->input->post('tgl_cekin');
		$tgl_cekout = $this->input->post('tgl_cekout');
		
		$input = array(
			'id_pemesan' => $id_pemesan,
			'nama_pemesan' => $nama_pemesan,
			'alamat_email' => $alamat_email,
			'no_hp' => $no_hp,
			'jns_kamar' => $jns_kamar,
			'jml_tamu_dewasa' => $jml_tamu_dewasa,
			'jml_tamu_anak' => $jml_tamu_anak,
			'jml_kamar' => $jml_kamar,
			'tgl_cekin' => $tgl_cekin,
			'tgl_cekout' => $tgl_cekout
		);
		
		if(empty($nama_pemesan) OR empty($alamat_email) OR empty($no_hp) OR empty($jns_kamar) OR empty($jml_tamu_dewasa) OR empty($jml_tamu_anak) OR empty($jml_kamar) OR empty($tgl_cekin) OR empty($tgl_cekout)){	
			$this->session->set_flashdata('msgfalse','data tidak boleh kosong.');
			redirect('home/viewInput');
		}else if(!valid_email($alamat_email)){	
			$this->session->set_flashdata('msgfalse','format email salah.');
			redirect('home/viewInput');
		}else if(!is_numeric($no_hp)){
			$this->session->set_flashdata('msgfalse','format nomer telpon salah.');
			redirect('home/viewInput');
		}else{
			$this->model_input->inputPemesan($input);
			redirect('home/viewTamu/'.$no_hp);
		}
	}
	public function inputTamu($no_hp)
		{	
			$nama = $this->input->post('nama');
			$ktp = $this->input->post('no_ktp');
			$id_pemesan = $this->input->post('id_pemesan');
		
			$insert = array(
				'nama' => $nama,
				'no_ktp' => $ktp,
				'id_pemesan' => $id_pemesan

			);

		if(empty($nama) OR empty($ktp)){
			$this->session->set_flashdata('msgfalse','data tidak boleh kosong.');
			redirect('home/viewTamu/'.$no_hp);
		}else if(!is_numeric($ktp)){
			$this->session->set_flashdata('msgfalse','format nomer KTP salah.');
			redirect('home/viewTamu/'.$no_hp);
		}else{
			$this->model_input->inputTamu($insert);
			$this->session->set_flashdata('msgtrue','data '.$nama.' berhasil di input');	
			redirect('home');
		}
	}	
}