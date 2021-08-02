<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('role_id') == 1)
		{
			redirect('user/admin');
		}
		if($this->session->userdata('role_id') == 2)
		{
			redirect('user/guru');
		}
		if($this->session->userdata('role_id') == 3)
		{
			redirect('user/seksi');
		}
		if($this->session->userdata('role_id') == 4)
		{
			redirect('user');
		}
		
		$data['judul'] = 'Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('index/index');
		$this->load->view('templates/footer');
	}

}
