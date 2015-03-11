<?php
session_start();
	class Beranda Extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();	
			if (!empty($this->session->userdata('admin'))) 
			{
				$this->load->view('style');
			}
			else
			{
				redirect('home','refresh');
			}
			
		}

		public function index()
		{
			$session_data=$this->session->userdata('admin');
			$data['username']=$session_data['username'];
			$this->load->view('admin/index',$data);
		}
		public function tabel_mhs()
		{
			$data['mhs']=$this->datamhs->display();

		}
	}