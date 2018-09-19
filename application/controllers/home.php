<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_input','',TRUE);
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function viewInput()
	{
		$this->load->view('input');
	}
	public function viewTamu($no_hp)
	{
		$data = array(
			'input' => $this->model_input->viewTamu($no_hp)
		);
		$this->load->view('input_tamu', $data);
	}	
}
