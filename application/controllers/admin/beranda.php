<?php
session_start();
	class Beranda Extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();	
			if (!empty($this->session->userdata('admin'))) 
			{
				$this->load->view('admin/style');
				$this->load->model('datapasangan');
				$this->load->helper('singkat');
				$this->load->model('datapemilih');
				$this->load->model('datacalon');
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
			$data['pasangan']=$this->datapasangan->baru();
			$data['mhs']=$this->datamhs->all();
			$data['pemilih']=$this->datapemilih->all();
			$data['calon']=$this->datacalon->all();
			$data['calontinjau']=$this->datacalon->tinjau();
			$this->load->view('admin/index',$data);
		}
		public function tabel_mhs()
		{
			$data['mhs']=$this->datamhs->display();
		}
		public function  statistic()
		{
			$this->load->view('admin/charts');
		}
	}