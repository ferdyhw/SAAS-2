<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_model extends CI_Model {

	public function getAllSiswa()
	{
		return $this->db->get('t_absen')->result_array();
	}

	public function tambahDataSiswa()
	{
		$data = [

			"nama" => $this->input->post('nama', true),
			"nis" => $this->input->post('nis', true),
			"kelas" => $this->input->post('kelas', true),
			"jenis_kelamin" => $this->input->post('jenis_kelamin', true)
		];

		$this->db->insert('t_absen',  $data);
	}

	public function absenHarian($id)
	{	

		$data = [
			
			"nama" => $this->input->post('nama', true),
			"nis" => $this->input->post('nis', true),
			"tanggal" => $this->input->post('tanggal', true),
			"kehadiran" => $this->input->post('absensi', true),
			"keterangan" => $this->input->post('keterangan', true),
			"id_siswa" => $this->input->post('id_siswa', true),
			"status" => 1,

		];

		return $this->db->insert('absensi',  $data);
	}

	public function editAbsensi($id)
	{	

		$data = [
			
			"nama" => $this->input->post('nama', true),
			"nis" => $this->input->post('nis', true),
			"tanggal" => $this->input->post('tanggal', true),
			"kehadiran" => $this->input->post('absensi', true),
			"keterangan" => $this->input->post('keterangan', true),
			"id_siswa" => $this->input->post('id_siswa', true),
			"status" => 0,

		];
		
		$this->db->where('id_absen', $id);
		return $this->db->update('absensi',  $data);
	}

	public function pendingAbsensi($id)
	{	

		$data = [
			
			"nama" => $this->input->post('nama', true),
			"nis" => $this->input->post('nis', true),
			"tanggal" => $this->input->post('tanggal', true),
			"kehadiran" => $this->input->post('absensi', true),
			"keterangan" => $this->input->post('keterangan', true),
			"id_siswa" => $this->input->post('id_siswa', true),
			"status" => $this->input->post('status', true),

		];
		
		$this->db->where('id_absen', $id);
		return $this->db->update('absensi',  $data);
	}

	public function hapusAbsensi($id)
	{
		$this->db->where('id_absen', $id);
		return $this->db->delete('absensi');
	}

	public function ubahProfile()
	{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$bio = $this->input->post('bio');

			$this->db->set('nama', $nama);
			$this->db->where('email', $email);

			$this->db->set('bio', $bio);
			$this->db->where('email', $email);

			$upload_foto = $_FILES['foto']['name'];
			
			if($upload_foto)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/profile/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto'))
				{
					$foto_lama = $data['user']['gambar'];
					if($foto_lama != 'default.jpg')
					{
						unlink(FCPATH . 'assets/img/profile/' . $foto_lama);
					}
					$foto_baru = $this->upload->data('file_name');
					$this->db->set('gambar', $foto_baru);
				} else {
					echo $this->upload->display_errors();
				}

			}

			$this->db->update('user');
	}

	public function ubahPassword($data)
	{
		$passwordlama = $this->input->post('passwordlama');
		$passwordbaru = $this->input->post('password1');
		if(!password_verify($passwordlama, $data['user']['password']))
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Password Lama Salah :( </div>');
			redirect('user/editPassword');
		} else {
			if($passwordlama == $passwordbaru)
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Password Baru Tidak Boleh Sama Dengan Pasword Lama :( </div>');
				redirect('user/editPassword');
			} else {
				$password_hash = password_hash($passwordbaru, PASSWORD_DEFAULT);

				$this->db->set('password', $password_hash);
				$this->db->where('email', $data['user']['email']);
				$this->db->update('user');
			}
		}
	}

	public function cariSiswa()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('nis', $keyword);
		$this->db->or_like('kelas', $keyword);			
		return $this->db->get('t_absen')->result_array();
	}

	public function cariAbsensi()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('nis', $keyword);
		$this->db->or_like('tanggal', $keyword);
		$this->db->or_like('kehadiran', $keyword);
		$this->db->or_like('keterangan', $keyword);
		return $this->db->get('absensi')->result_array();
	}

}