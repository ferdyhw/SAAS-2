<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

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
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ( $this->form_validation->run() == FALSE )
		{
		$data['judul'] = 'Masuk | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/footer');
		}
		$this->login();
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user)
		{				

			if (password_verify($password, $user['password']))
			{

			$data = [
				'email' => $user['email'],
				'role_id' => $user['role_id'],
				'nis' => $user['nis']
			];
			$this->session->set_userdata($data);
				if($user['role_id'] == 1)
				{
					redirect('user/admin');
				} 
				if($user['role_id'] == 2)
				{
					redirect('user/guru');
				} 
				if($user['role_id'] == 3)
				{
					redirect('user/seksi');
				} else {
					redirect('user');
				}

			} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Password Yang Dimasukan Salah :( </div>');
			redirect('auth');
			}
		 }
	}

	public function signup()
	{
		$this->form_validation->set_rules('nama-lengkap', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');
		$this->form_validation->set_rules('nis', 'NIS', 'trim|min_length[9]|numeric');		

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'Tambah Akun | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);		
		$this->load->view('auth/signup');	
		$this->load->view('templates/footer');
		} else {

		$data = [

			'nama'     => htmlspecialchars($this->input->post('nama-lengkap', true)),
			'email'    => htmlspecialchars($this->input->post('email', true)),
			'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
			'nip'      => '',			
			'nis'      => htmlspecialchars($this->input->post('nis', true)),
			"kelas"    => $this->input->post('kelas', true),
			'gambar'   => 'default.jpg',
			'bio'      => '',
			"role_id"  => 4,
			'tanggal'  => date('Y-m-d')

		];

		$this->db->insert('user', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Horre !!! Akun Berhasil Dibuat :) </div>');
		redirect('auth');
			}
		
	} 

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Anda Berhasil Logout :D </div>');
		redirect('auth');
	}

	public function error()
	{
		$role_id = $this->session->userdata('role_id');

		if($role_id == 1) {
		$data['judul'] = 'Error 403 | Akses Ditolak';
		$this->load->view('templates/header', $data);
		$this->load->view('admin/blok');
		$this->load->view('templates/footer');
		}

		if($role_id == 2) {
		$data['judul'] = 'Error 403 | Akses Ditolak';
		$this->load->view('templates/header', $data);
		$this->load->view('guru/blok');
		$this->load->view('templates/footer');
		}

		if($role_id == 3) {
		$data['judul'] = 'Error 403 | Akses Ditolak';
		$this->load->view('templates/header', $data);
		$this->load->view('seksi/blok');
		$this->load->view('templates/footer');
		}

		if($role_id == 4) {
		$data['judul'] = 'Error 403 | Akses Ditolak';
		$this->load->view('templates/header', $data);
		$this->load->view('user/blok');
		$this->load->view('templates/footer');
		}


	}

}