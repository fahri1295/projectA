<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authadmin extends CI_Controller {
public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
		$this->load->model('Muser');
		$this->load->library('session');
      		
    } 
	public function index()
	{
		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='beranda';
		$data['footer']='template/view_footer';
		$this->load->view('template/view_index',$data);
	}

}

/* End of file Authadmin.php */
/* Location: ./application/controllers/Authadmin.php */