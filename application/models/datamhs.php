<?php
	class DataMhs extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function all()
		{
			$query=$this->db->get('mahasiswa');
			if ($query) {
				return $query;
			}
			else
			{
				return false;
			}
		}
		public function one($nim)
		{
			$this->db->where('nim',$nim);
		 	$query=$this->db->get('mahasiswa');
		 	if ($query->num_rows>0) {
		 		return $query;
		 	}
		 	elseif ($query->num_rows<1) {
		 		echo "Data Tidak Ditemukan";
		 	}
		 	else
		 	{
		 		return False;
		 	}
		}
		public function ceklogin($username,$password)
		{
			$this->db->select('*');
			$this->db->where('nim',$username);
			$this->db->where('password',$password);
			$query=$this->db->get('mahasiswa');
			if ($query->num_rows==1) {
				return $query->result();
			}
			else
			{
				return null;
			}
		}
	}