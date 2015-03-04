<?php
	class DataCalon extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function all()
		{
			//$this->db->where('status',1)
			$query=$this->db->get('calon');
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
		public function detail($id_calon)
		{
			$this->db->where('id_calon',$id_calon);
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
	}