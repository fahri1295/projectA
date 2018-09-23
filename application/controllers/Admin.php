<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
public function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
		$this->load->model('Mbagian');
		$this->load->model('Mdivisi');
		
      		
    } 
	public function index()
	{
		$this->load->model('Madmin');
		$this->load->model('Mbagian');
		$this->load->model('Mdivisi');
		

		
		$data['bag']=$this->Mbagian->getallbagian('mst_bagian');
		$data['divs']=$this->Mdivisi->getalldivisi('mst_divisi');

		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='admin/index';
		$data['footer']='template/view_footer';
		
		$data['user']=$this->Madmin->getall('mst_user'); 
		$this->load->view('template/view_index',$data);
	}

	public function add()
	{
		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='admin/view_add';
		$data['footer']='template/view_footer';

		$this->load->model('Madmin');
		$this->load->model('Mbagian');
		$this->load->model('Mdivisi');
		

		if (isset($_POST) && count($_POST) > 0) {
			$data = array(
				'mst_name_user' => $this->input->post('nama') ,
				'mst_username'  => $this->input->post('username'), 
				'mst_NRP'       => $this->input->post('nrp') , 
				'mst_password'  => md5($this->input->post('password')) , 
				'mst_id_bagian' => $this->input->post('bagian') ,
				'mst_id_divisi' => $this->input->post('divisi')  
				
				);
			$this->Madmin->insert($data);
			redirect('admin/index');
		}
		else
			{

					$this->load->model('Madmin');
					$this->load->model('Mbagian');
					$this->load->model('Mdivisi');
					
					$data['bag']=$this->Mbagian->getallbagian('mst_bagian');
					$data['divs']=$this->Mdivisi->getalldivisi('mst_divisi');
							
					$this->load->view('template/view_index', $data);
			}
	}

	public function edit($mst_id_user){
		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='admin/view_edit';
		$data['footer']='template/view_footer';

		$this->load->model('Madmin');
		$this->load->model('Mbagian');
		$this->load->model('Mdivisi');
		
		$data['user'] = $this->Madmin->getuser($mst_id_user);

		if(isset($data['user']['mst_id_user']))
			{
					if(isset($_POST) && count($_POST) > 0)     
					{   
						
						$data = array(
							'mst_name_user' => $this->input->post('nama') ,
							'mst_username'  => $this->input->post('username'), 
							'mst_NRP'       => $this->input->post('nrp') , 
							'mst_password'  => md5($this->input->post('password')) , 
							'mst_id_bagian' => $this->input->post('bagian') ,
							'mst_id_divisi' => $this->input->post('divisi')  
							
						);

							$this->Madmin->updateuser($mst_id_user, $data); 
							redirect('admin');
					}
					else
						{
						
						$this->load->model('Madmin');
						$this->load->model('Mbagian');
						$this->load->model('Mdivisi');
						
						$data['bag']=$this->Mbagian->getallbagian('mst_bagian');
						$data['divs']=$this->Mdivisi->getalldivisi('mst_divisi');
						
						$this->load->view('template/view_index', $data);
						}
				}
				else
					show_error('The menu you are trying to edit does not exist.');


							}

	function delete($mst_id_user)
    {
        $user = $this->Madmin->getuser($mst_id_user);

        // check if the menu exists before trying to delete it
        if(isset($user['mst_id_user']))
        {
            $this->Madmin->delete($mst_id_user);
            redirect('admin');
        }
        else
            show_error('The menu you are trying to delete does not exist.');
    }
}



/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */