<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
		$this->load->model('Muser');
		$this->load->library('session');
      		
    } 
	public function index()
	{
		$this->load->view('login');
	}
	 function proses_login(){
		
		$user= $this->input->post('username');
		$pass= md5($this->input->post('password'));

		$ceklogin = $this->Muser->login($user,$pass);

		if ($ceklogin) {
			foreach ($ceklogin as $row);
				$this->session->set_userdata('mst_username', $row->mst_username);
				$this->session->set_userdata('mst_name_divisi', $row->mst_name_divisi);
				$this->session->set_userdata('mst_name_bagian', $row->mst_name_bagian);
				$this->session->set_userdata('mst_name_user', $row->mst_name_user);

				//untuk divisi Admin Bag Ops
				if ($this->session->userdata('mst_name_divisi')=="ADMIN") {
					redirect('Dashboard','refresh');
				}elseif($this->session->userdata('mst_name_divisi')=="SATGAS" || $this->session->userdata('mst_name_divisi')=="SUBDIT" || $this->session->userdata('mst_name_divisi')=="SUBBAG" ){
					redirect('Home','refresh');
				}
		}else{
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		
		}
	}
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */