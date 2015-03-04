<?php
	class DataLembaga extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function all()
		{
			$query=$this->db->get('lembaga');
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
			$this->db->where('nip',$username);
			$this->db->where('password',$password);
			$query=$this->db->get('lembaga');
			if ($query->num_rows==1) {
				return $query->result();
			}
			else
			{
				return null;
			}
		}
	}