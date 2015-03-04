<?php 
session_start();
	class Home extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			if(!empty($this->session->userdata('mahasiswa')))
			{
				$this->load->model('datamhs');
			}
			else
			{
				$this->session->flashdata('pesan','Anda Harus Login Terlebih Dahulu!');
				redirect('home');
			}
		}
		public function index()
		{
			$this->load->view('style');
			$session_data=$this->session->userdata('mahasiswa');  
	        $data['nama']=$session_data['nama'];  
	        $data['nim']=$session_data['nim'];  
	        $data['calon']=$this->datacalon->all();
			$this->load->view('mahasiswa/beranda',$data);
		}
		function detail($id_calon)
		{
			$this->load->view('style');
			$data['calon']=$this->datacalon->detail($id_calon);
			$this->load->view('mahasiswa/detail',$data);
		}
		function daftar($nim)
		{
			$this->load->view('style');
			$data['calon']=$this->datamhs->one($nim);
			$this->load->view('calon/daftarcalon',$data);
		}
		public function cari()
		{
			$nim=$this->input->post('nim');
			if (trim(!empty(strlen($nim)!=10))) {
				echo "Data Tidak DItemukan";
			}
			else
			{
				$query=$this->datamhs->one($nim);				
				$data_wakil=$query->result();
				echo json_encode($data_wakil);
			}
		}
		public function handleNull()
		{
			echo "Data Tidak Cocok";
		}
	}