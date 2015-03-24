<?php 
	class datapasangan extends CI_Model 
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function all()
		{
			$query =$this->db->query("select * from pasangan");
					
			if ($query->num_rows>0) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function detail($kode_pasangan)
		{
			$this->db->where('kode_pasangan',$kode_pasangan);
			$query=$this->db->get('pasangan');
			if ($query->num_rows>0) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function baru()
		{
			$status=0;
			$this->db->where('status_pasangan',$status);
			$query=$this->db->get('pasangan');
			if ($query->num_rows>0) {
				return $query;
			}
			else
			{
				return null;
			}
		}
	}