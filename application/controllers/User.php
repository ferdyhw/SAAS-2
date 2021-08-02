<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		ceklogin();
		$this->load->library('form_validation');
		$this->load->model('Absensi_model');
	}

	public function index()
	{
		$role_id = $this->session->userdata('role_id');
		if($role_id != 4) {
			redirect('auth/error');
		} else {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();		
		$data['judul'] = 'Dashboard | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/user/top-navbar', $data);
		$this->load->view('templates/user/side-navbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/user/u-footer');
		$this->load->view('templates/footer');
	  }
	}

	public function admin()
	{

		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();		
		$data['judul'] = 'Dashboard | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin/top-navbar', $data);
		$this->load->view('templates/admin/side-navbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/admin/u-footer');
		$this->load->view('templates/footer');			
		}
	  }

	public function guru()
	{
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();		
		$data['judul'] = 'Dashboard | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/guru/top-navbar', $data);
		$this->load->view('templates/guru/side-navbar', $data);
		$this->load->view('guru/index', $data);
		$this->load->view('templates/guru/u-footer');
		$this->load->view('templates/footer');			
	  }
	}

	public function seksi()
	{
		$role_id = $this->session->userdata('role_id');
		if($role_id != 3) {
			redirect('auth/error');
		} else {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();		
		$data['judul'] = 'Dashboard | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/seksi/top-navbar', $data);
		$this->load->view('templates/seksi/side-navbar', $data);
		$this->load->view('seksi/index', $data);
		$this->load->view('templates/seksi/u-footer');
		$this->load->view('templates/footer');			
	  }
	}

	public function editProfile()
	{
		$role_id = $this->session->userdata('role_id');
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$this->load->model('Absensi_model');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		if($role_id == 1) {
			$data['judul'] = 'Edit Akun | Absensi SMKN 1 Cimahi';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/admin/top-navbar', $data);
			$this->load->view('templates/admin/side-navbar', $data);
			$this->load->view('edit/profile', $data);
			$this->load->view('templates/admin/u-footer');
			$this->load->view('templates/footer');
			}
			if($role_id == 2) {
			$data['judul'] = 'Edit Akun | Absensi SMKN 1 Cimahi';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/guru/top-navbar', $data);
			$this->load->view('templates/guru/side-navbar', $data);
			$this->load->view('edit/profile', $data);
			$this->load->view('templates/guru/u-footer');
			$this->load->view('templates/footer');
			}
			if($role_id == 3) {
			$data['judul'] = 'Edit Akun | Absensi SMKN 1 Cimahi';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/seksi/top-navbar', $data);
			$this->load->view('templates/seksi/side-navbar', $data);
			$this->load->view('edit/profile', $data);
			$this->load->view('templates/seksi/u-footer');
			$this->load->view('templates/footer');
			}
			if($role_id == 4) {
			$data['judul'] = 'Edit Akun | Absensi SMKN 1 Cimahi';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/user/top-navbar', $data);
			$this->load->view('templates/user/side-navbar', $data);
			$this->load->view('edit/profile', $data);
			$this->load->view('templates/user/u-footer');
			$this->load->view('templates/footer');
			}
		} else {
			$this->Absensi_model->ubahProfile();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Profil Berhasil Diubah :) </div>');
			redirect('user/editProfile');
		}

	}

	public function editPassword()
	{
		$role_id = $this->session->userdata('role_id');
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$this->load->model('Absensi_model');
		$this->form_validation->set_rules('passwordlama', 'Password Lama', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password Baru', 'required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password Baru', 'required|trim|min_length[3]|matches[password1]');

		if ( $this->form_validation->run() == FALSE ) 
		{
			if($role_id == 1) {
			$data['judul'] = 'Edit Akun | Absensi SMKN 1 Cimahi';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/admin/top-navbar', $data);
			$this->load->view('templates/admin/side-navbar', $data);
			$this->load->view('edit/index', $data);
			$this->load->view('templates/admin/u-footer');
			$this->load->view('templates/footer');
			}
			if($role_id == 2) {
			$data['judul'] = 'Edit Akun | Absensi SMKN 1 Cimahi';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/guru/top-navbar', $data);
			$this->load->view('templates/guru/side-navbar', $data);
			$this->load->view('edit/index', $data);
			$this->load->view('templates/guru/u-footer');
			$this->load->view('templates/footer');
			}
			if($role_id == 3) {
			$data['judul'] = 'Edit Akun | Absensi SMKN 1 Cimahi';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/seksi/top-navbar', $data);
			$this->load->view('templates/seksi/side-navbar', $data);
			$this->load->view('edit/index', $data);
			$this->load->view('templates/seksi/u-footer');
			$this->load->view('templates/footer');
			}
			if($role_id == 4) {
			$data['judul'] = 'Edit Akun | Absensi SMKN 1 Cimahi';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/user/top-navbar', $data);
			$this->load->view('templates/user/side-navbar', $data);
			$this->load->view('edit/index', $data);
			$this->load->view('templates/user/u-footer');
			$this->load->view('templates/footer');
			}
			} else {
				$this->Absensi_model->ubahPassword($data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Password Berhasil Diubah :) </div>');
				redirect('user/editPassword');
		}
	}
}