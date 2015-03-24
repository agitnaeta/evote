<?php
	class DataCalon extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function all()
		{
			$this->db->where('status',1);
			$query=$this->db->get('calon');
			if ($query) {
				return $query;
			}
			else
			{
				return false;
			}
		}
		public function tinjau()
		{
			$this->db->where('status_pasangan',0);
			$query=$this->db->get('pasangan');
			if ($query) {
				return $query;
			}
			else
			{
				return false;
			}
		}
		public function ceklogin($username,$password)
		{
			$this->db->select('*');
			$this->db->where('id',$username);
			$this->db->where('password',$password);
			$query=$this->db->get('calon');
			if ($query->num_rows==1) {
				return $query->result();
			}
			else
			{
				return null;
			}
		}
		public function detail($kode_pasangan)
		{
			$this->db->where('kode_pasangan',$kode_pasangan);
			$query=$this->db->get('calon');
			if($query)
			{
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function daftar($nimketua,$nimwakil)
		{
			$query=$this->db->query("select nim from calon where nim='$nimketua' XOR nim='$nimwakil'");
			if ($query->num_rows>0) 
			{
				$this->session->flashdata('pesan','Anda Sudah terdaftar!');
				redirect('mahasiswa/home/daftar/$nimketua');
			}
			else
			{
				//id_calon
				$date=date('Y');
				$max_id=$this->db->query("select max(substr(id_calon,1,1)) as mi from calon");
				$mx_id=$max_id->row();
				$mi=$mx_id->mi+1;
				$id_calon="$mi$date";
				//kode_pasangan
				$sub_date=substr($date,4,4);
				print_r($sub_date);

			}
		}
	}

