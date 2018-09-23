<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
		$this->load->model('Muser');
		$this->load->library('session');

		if ($this->session->userdata('mst_username')=="") {
			echo "<script>alert('Anda Harus Login Terlebih Dahulu');history.go(-1);</script>";
		}

    } 
	public function index()
	{
		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='beranda';
		$data['footer']='template/view_footer';
		$this->load->view('template/view_index',$data);
	
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('home');
	}


}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */