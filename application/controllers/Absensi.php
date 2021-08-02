<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		ceklogin();
	}

// ABSEN ADMIN
	public function admin()
	{
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['siswa'] = $this->db->get('t_absen')->result_array();
		$this->load->model('Absensi_model');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		if ( $this->input->post('keyword') ) {
			$data['siswa'] = $this->Absensi_model->cariSiswa();
		}
		if($this->form_validation->run() == false)
			{
			$this->load->model('Absensi_model');			
			$data['judul'] = 'Tabel Absen | Absensi SMKN 1 Cimahi';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/admin/top-navbar');
			$this->load->view('templates/admin/side-navbar', $data);
			$this->load->view('t_absen/absen-admin', $data);
			$this->load->view('templates/admin/u-footer');
			$this->load->view('templates/footer');
			} else {
			$id = $this->input->post('id_siswa');
			$this->Absensi_model->absenHarian($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Absen Harian Siswa Berhasil :) </div>');
			redirect('absensi/admin');
			}

		}
	}

// ABSEN GURU
	public function guru()
	{
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['siswa'] = $this->db->get('t_absen')->result_array();
		$this->load->model('Absensi_model');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		if ( $this->input->post('keyword') ) {
			$data['siswa'] = $this->Absensi_model->cariSiswa();
		}
		if($this->form_validation->run() == false)
			{
			$this->load->model('Absensi_model');			
			$data['judul'] = 'Tabel Absen | Absensi SMKN 1 Cimahi';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/guru/top-navbar');
			$this->load->view('templates/guru/side-navbar', $data);
			$this->load->view('t_absen/absen-guru', $data);
			$this->load->view('templates/guru/u-footer');
			$this->load->view('templates/footer');
			} else {
			$id = $this->input->post('id_siswa');
			$this->Absensi_model->absenHarian($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Absen Harian Siswa Berhasil :) </div>');
			redirect('absensi/guru');
			}
	}
} 

// ABSEN SEKSI ABSENSI
	public function seksi()
	{
		$role_id = $this->session->userdata('role_id');
		if($role_id != 3) {
			redirect('auth/error');
		} else {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['siswa'] = $this->db->get('t_absen')->result_array();
		$this->load->model('Absensi_model');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		if ( $this->input->post('keyword') ) {
			$data['siswa'] = $this->Absensi_model->cariSiswa();
		}
		if($this->form_validation->run() == false)
			{
			$this->load->model('Absensi_model');			
			$data['judul'] = 'Tabel Absen | Absensi SMKN 1 Cimahi';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/seksi/top-navbar');
			$this->load->view('templates/seksi/side-navbar', $data);
			$this->load->view('t_absen/absen-seksi', $data);
			$this->load->view('templates/seksi/u-footer');
			$this->load->view('templates/footer');
			} else {
			$id = $this->input->post('id_siswa');
			$this->Absensi_model->absenHarian($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Absen Harian Siswa Berhasil :) </div>');
			redirect('absensi/seksi');
			}
	}
} 

	public function tambah()
	{
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->load->model('Absensi_model');
		$data['judul'] = 'Tambah Siswa | Absensi SMKN 1 Cimahi';
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nis', 'NIS', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		}

		if ( $this->form_validation->run() == FALSE ) {
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/admin/top-navbar');
			$this->load->view('templates/admin/side-navbar', $data);
			$this->load->view('t_absen/tambah-siswa', $data);
			$this->load->view('templates/admin/u-footer');
			$this->load->view('templates/footer');
		} else {
			$this->Absensi_model->tambahDataSiswa();
			$this->session->set_flashdata('pesan-berhasil', '<div class="alert alert-success" role="alert"> Horre !!! Data Siswa Berhasil Dibuat :) </div>');
		redirect('absensi/tambah');
		}
	}

	public function signup()
	{
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('nama-lengkap', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');
		$this->form_validation->set_rules('nis', 'NIS', 'trim|min_length[9]|numeric');
		$this->form_validation->set_rules('nip', 'NIP', 'trim|min_length[9]|numeric');
		$this->form_validation->set_rules('role_id', 'Role ID', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'Tambah Akun | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin/top-navbar');
		$this->load->view('templates/admin/side-navbar', $data);
		$this->load->view('t_absen/tambah-akun');
		$this->load->view('templates/admin/u-footer');
		$this->load->view('templates/footer');
		} else {

		$data = [

			'nama'     => htmlspecialchars($this->input->post('nama-lengkap', true)),
			'email'    => htmlspecialchars($this->input->post('email', true)),
			'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
			'nip'      => htmlspecialchars($this->input->post('nip', true)),
			'nis'      => htmlspecialchars($this->input->post('nis', true)),
			"kelas"    => $this->input->post('kelas', true),
			'gambar'   => 'default.jpg',
			'bio'      => '',
			"role_id"  => htmlspecialchars($this->input->post('role_id', true)),
			'tanggal'  => date('Y-m-d')

		];

		$this->db->insert('user', $data);
		$this->session->set_flashdata('pesan-berhasil', '<div class="alert alert-success" role="alert"> Horre !!! Akun Berhasil Dibuat :) </div>');
		redirect('absensi/signup');
			}
		}
		
	}

	public function kehadiran()
	{
		$role_id = $this->session->userdata('role_id');
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['absensi'] = $this->db->get_where('absensi', ['status' => 1])->result_array();
		$data['siswa'] = $this->db->get('t_absen')->result_array();	
		$this->load->model('Absensi_model');
		if ( $this->input->post('keyword') ) {
			$data['absensi'] = $this->Absensi_model->cariAbsensi();
		}		
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		if ( $this->form_validation->run() == FALSE ) 
		{
		if($role_id == 1) {		
		$data['judul'] = 'Kehadiran | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin/top-navbar');
		$this->load->view('templates/admin/side-navbar', $data);
		$this->load->view('t_absen/kehadiran-admin', $data);
		$this->load->view('templates/admin/u-footer');
		$this->load->view('templates/footer');
		}
		if($role_id == 2) {
		$data['judul'] = 'Kehadiran | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/guru/top-navbar');
		$this->load->view('templates/guru/side-navbar', $data);
		$this->load->view('t_absen/kehadiran-guru', $data);
		$this->load->view('templates/guru/u-footer');
		$this->load->view('templates/footer');
		}
		if($role_id == 3) {
		$data['judul'] = 'Kehadiran | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/seksi/top-navbar');
		$this->load->view('templates/seksi/side-navbar', $data);
		$this->load->view('t_absen/kehadiran-seksi', $data);
		$this->load->view('templates/seksi/u-footer');
		$this->load->view('templates/footer');
		}
		} else {
			$id = $this->input->post('id_absen');
			$this->Absensi_model->editAbsensi($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Edit Absensi Siswa Berhasil, Tunggu Persetujuan :) </div>');
				redirect('absensi/kehadiran');
		}

	}

	public function pending()
	{
		$role_id = $this->session->userdata('role_id');
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['absensi'] = $this->db->get_where('absensi', ['status' => 0])->result_array();
		$data['siswa'] = $this->db->get('t_absen')->result_array();	
		$this->load->model('Absensi_model');
		if ( $this->input->post('keyword') ) {
			$data['absensi'] = $this->Absensi_model->cariAbsensi();
		}
		if($role_id > 2) {
			redirect('auth/error');
		} else {		
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		}
		if ( $this->form_validation->run() == FALSE ) 
		{
		if($role_id == 1)
		{
		$data['judul'] = 'Persetujuan | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin/top-navbar');
		$this->load->view('templates/admin/side-navbar', $data);
		$this->load->view('pending/pending', $data);
		$this->load->view('templates/admin/u-footer');
		$this->load->view('templates/footer');		
		}
		if($role_id == 2)
		{
		$data['judul'] = 'Persetujuan | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/guru/top-navbar');
		$this->load->view('templates/guru/side-navbar', $data);
		$this->load->view('pending/pending', $data);
		$this->load->view('templates/guru/u-footer');
		$this->load->view('templates/footer');		
		}
		} else {
			$id = $this->input->post('id_absen');
			$this->load->model('Absensi_model');
			$this->Absensi_model->pendingAbsensi($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Absensi Siswa Disetujui :) </div>');
			redirect('absensi/pending');
		}
	}

	public function hapus()
	{
		$id = $this->input->post('id_absen');
		$this->load->model('Absensi_model');
		$this->Absensi_model->hapusAbsensi($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Hapus Absensi Siswa Berhasil :) </div>');
		redirect('absensi/kehadiran');
	}

	public function detail()
	{
		$this->load->model('Absensi_model');
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['absensi'] = $this->db->get_where('absensi')->result_array();		
		$data['judul'] = 'Kehadiran | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin/top-navbar');
		$this->load->view('templates/admin/side-navbar', $data);
		$this->load->view('detail/siswa', $data);
		$this->load->view('templates/admin/u-footer');
		$this->load->view('templates/footer');
	}

	public function kehadiran_siswa()
	{
		$role_id = $this->session->userdata('role_id');
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['absensi'] = $this->db->get_where('absensi', ['nis' => $this->session->userdata('nis'), 'status' => 1])->result_array();		
		if($role_id == 3) {
		$data['judul'] = 'Kehadiran | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/seksi/top-navbar');
		$this->load->view('templates/seksi/side-navbar', $data);
		$this->load->view('t_absen/kehadiran-siswa', $data);
		$this->load->view('templates/seksi/u-footer');
		$this->load->view('templates/footer');
		}
		if($role_id == 4) {
		$data['judul'] = 'Kehadiran | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/user/top-navbar');
		$this->load->view('templates/user/side-navbar', $data);
		$this->load->view('t_absen/kehadiran-siswa', $data);
		$this->load->view('templates/user/u-footer');
		$this->load->view('templates/footer');
		}
	}

	public function info()
	{
		$role_id = $this->session->userdata('role_id');
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['siswa'] = $this->db->get('t_absen')->result_array();
		if($role_id == 1) {
		$data['judul'] = 'Info Kelas | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin/top-navbar');
		$this->load->view('templates/admin/side-navbar', $data);
		$this->load->view('admin/info', $data);
		$this->load->view('templates/admin/u-footer');
		$this->load->view('templates/footer');
		}
		if($role_id == 2) {
		$data['judul'] = 'Info Kelas | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/guru/top-navbar');
		$this->load->view('templates/guru/side-navbar', $data);
		$this->load->view('guru/info', $data);
		$this->load->view('templates/guru/u-footer');
		$this->load->view('templates/footer');
		}
		if($role_id == 3) {
		$data['judul'] = 'Info Kelas | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/seksi/top-navbar');
		$this->load->view('templates/seksi/side-navbar', $data);
		$this->load->view('seksi/info', $data);
		$this->load->view('templates/seksi/u-footer');
		$this->load->view('templates/footer');
		}
		if($role_id == 4) {
		$data['judul'] = 'Info Kelas | Absensi SMKN 1 Cimahi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/user/top-navbar');
		$this->load->view('templates/user/side-navbar', $data);
		$this->load->view('user/info', $data);
		$this->load->view('templates/user/u-footer');
		$this->load->view('templates/footer');
		}

	}

}