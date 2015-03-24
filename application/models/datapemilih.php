<?php
	class Datapemilih extends ci_model
	{
		public function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('admin')))
			{
				$sess_array=$this->session->userdata('admin');
				$data['username']=$sess_array['username'];
			}
			else
			{
				$this->session->flasdata('Pesan','Anda Harus Login Dahulu!');
				redirect('home');
			}
		}
		public function all()
		{
			$query=$this->db->get('hitung');
			if($query->num_rows>0)
			{
				return $query;
			}
			else
			{
				return null;
			}
		}
	}