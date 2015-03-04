<?php 
	class Login extends CI_Controller
	{
		function __construct()
 		{
			parent::__construct();
		}
		public function index()
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');

			if (!empty($username) and !empty($password)) {
				$mhs=$this->datamhs->ceklogin($username,$password);
				if ($mhs) {
					$sess_array=array();
						foreach ($mhs as $row)
							$sess_array=array(
								'nim'=>$row->nim,
								'nama'=>$row->nama);
							$this->session->set_userdata('mahasiswa',$sess_array);
							redirect('mahasiswa/home','refresh');
				}
				else
				{
					$lembaga=$this->datalembaga->ceklogin($username,$password);
					if ($lembaga) {
						$sess_array=array();
						foreach ($lembaga as $row)
							$sess_array=array(
								'nip'=>$row->nip,
								'nama'=>$row->nama);
							$this->session->set_userdata('lembaga',$sess_array);
							redirect('lembaga/utama','refresh');
					}
					else
					{
						$admin=$this->dataadmin->ceklogin($username,$password);
						if ($admin) {
							$sess_array=array();
							foreach ($admin as $row)
								$sess_array=array(
									'nim'=>$row->nim,
									'nama'=>$row->nama);
							$this->session->set_userdata('admin',$sess_array);
							redirect('admin/utama','refresh');
						}
						else
						{
							$this->session->set_flashdata('pesan','Kombinasi Login Salah!');
							redirect ('home');
						}
					}
				}	
				
			}
			else
			{
				$this->session->set_flashdata('pesan','Kombinasi Login Salah!');
				redirect('home');
			}
		}
		public function logout()
		{
			if (!empty($this->session->userdata('mahasiswa'))) {
				$this->session->unset_userdata('mahasiswa');
				$this->session->set_flashdata('pesan','Anda Berhasil Keluar!');
				redirect('home');
			}
		}
	}
