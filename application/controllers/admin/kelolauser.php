<?php 
session_start();
	class KelolaUser extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('admin'))) {
				$this->load->model('datamhs');
				$this->load->view('admin/style');
				$this->load->helper('status_helper');
			}
			else
			{
				$this->session->flashdata('pesan','Anda harus login dahulu!');
			}
		}

		public function index()
		{
			$data['mhs']=$this->datamhs->all();
			$this->load->view('admin/tabel_mahasiswa',$data);
		}
		public function cari($nama)
		{
			$data['mhs']=$this->datamhs->all();
			echo json_encode($data);	
		}
	}