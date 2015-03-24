<?php 	
session_start();
	class Calon extends CI_Controller
	{
		public function __constrcut()
		{
			parent::__constrcut();
			if(!empty($this->session->userdata('mahasiswa')))
			{
				$this->load->model('datacalon');
			}
			else
			{
				$this->session->flashdata('pesan','Maaf Anda Harus Login Dulu!');
				redirect('home');
			}

		}
		public function daftar_calon()
		{
			$nimketua=$this->input->post('nimketua');
			$nimwakil=$this->input->post('nimwakil');
			$this->datacalon->daftar($nimketua,$nimwakil);
			$this->session->flashdata('pesan','Selamat Anda Berhasil Daftar!<br>
												Demi keamanan kami keluarkan');
			//redirect('login/logout');
		}
	}