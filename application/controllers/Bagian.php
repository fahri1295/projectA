<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends CI_Controller {

	public function index()
	{
		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='bagian/index';
		$data['footer']='template/view_footer';
		$this->load->view('template/view_index',$data);
	}
	public function add(){
		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='bagian/view_add';
		$data['footer']='template/view_footer';
		$this->load->view('template/view_index',$data);

		if(isset($_POST) && count($_POST) > 0)
        {
              
            $data = array(
                'mst_name_bagian'        => $this->input->post('nama'),
                
 );
            
            $this->Mbagian->insert($data);
	}



}

/* End of file Bagian.php */
/* Location: ./application/controllers/Bagian.php */