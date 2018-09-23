<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
public function __construct(){
        parent::__construct();
        $this->load->model('MKegiatan');
        $this->load->model('Madmin');
        date_default_timezone_set('Asia/Jakarta');
    } 
	public function index()
	{
        $this->load->model('MKegiatan');
		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='kegiatan/index';
		$data['footer']='template/view_footer';
		$data['kegiatan']=$this->MKegiatan->getall('mst_kegiatan');
		$this->load->view('template/view_index', $data);
	}

	public function add()
	{
		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='kegiatan/view_add';
		$data['footer']='template/view_footer';
		
		
		

		// konfigurasi file foto
        $nmfile = "file_".time();
        $config['upload_path']      = './file/images';
        $config['image_library']     = 'gd2';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 2048;
        $config['file_name']        = $nmfile;

        $this->load->library('upload', $config);

        if($this->upload->do_upload() && isset($_POST) && count($_POST) > 0)
        {
            $image = $this->upload->data();  
            $data = array(
				'mst_nama_kegiatan'    => $this->input->post('nama_kegiatan'),
				'mst_isi_kegiatan'     => $this->input->post('isi_kegiatan'),
				'mst_image_kegiatan'   => $image['file_name'],
				'mst_name_user'        => $this->session->userdata('mst_name_user'),
				'mst_name_divisi'      => $this->session->userdata('mst_name_divisi'),
				'mst_name_bagian'      => $this->session->userdata('mst_name_bagian'),
				'mst_tanggal_kegiatan' => date_format(date_create($this->input->post('tanggal_kegiatan')),'dd-mm-yyyy'),
				'mst_name_image'       => $this->input->post('name_image')
				
 );
            $this->MKegiatan->insert($data);
            $config2['image_library'] = 'gd2';
            $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
            $config2['new_image'] = './file/images/small'; // folder tempat menyimpan hasil resize
            $config2['maintain_ratio'] = TRUE;
            $config2['width'] = 50; //lebar setelah resize menjadi 100 px
            $config2['height'] = 50; //lebar setelah resize menjadi 100 px
                $this->load->library('image_lib',$config2);
             if ( !$this->image_lib->resize()){
                $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));
              }
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
            redirect('kegiatan/index');
        }
		else
        {

            
            $this->load->view('template/view_index', $data);
        }

	}


    
    public function delete($mst_id_kegiatan)
    {
        $kegiatan = $this->MKegiatan->getkegiatan($mst_id_kegiatan);

        // check if the menu exists before trying to delete it
        if(isset($kegiatan['mst_id_kegiatan']))
        {
            $this->MKegiatan->delete($mst_id_kegiatan);
            redirect('kegiatan');
        }
        else
            show_error('The menu you are trying to delete does not exist.');
    }


public function gettag(){
    $this->load->model('Madmin');
    $data['user']=$this->Madmin->getall('mst_user');
    echo json_encode($data);
}

public function tagging($mst_id_kegiatan){
        
        $data['header']='template/view_header';
        $data['sidebar']='template/view_sidebar';
        $data['content']='kegiatan/tagging_photo';
        $data['footer']='template/view_footer';

        $nmfile = "file_".time();
        $config['upload_path']      = './file/images';
        $config['image_library']     = 'gd2';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 2048;
        $config['file_name']        = $nmfile;
        $this->load->library('upload', $config);
        
        $data['kegiatan'] = $this->MKegiatan->getkegiatan($mst_id_kegiatan);
        if(isset($data['kegiatan']['mst_id_kegiatan']))
            {
                    if($this->upload->do_upload() && isset($_POST) && count($_POST) > 0)     
                    {   
                        $image = $this->upload->data(); 
                        $data = array(
                            'mst_nama_kegiatan'    => $this->input->post('nama_kegiatan'),
                            'mst_isi_kegiatan'     => $this->input->post('isi_kegiatan'),
                            'mst_image_kegiatan'   => $image['file_name'],
                            'mst_name_user'        => $this->session->userdata('mst_name_pers'),
                            'mst_name_divisi'      => $this->session->userdata('mst_name_divisi'),
                            'mst_name_bagian'      => $this->session->userdata('mst_name_bagian'),
                            'mst_tanggal_kegiatan' => date_format(date_create($this->input->post('tanggal_kegiatan')),'dd-mm-yyyy'),
                            'mst_name_image'       => $this->input->post('name_image'),
                            'mst_id_status'        => $this->input->post('status')
                        );

                            // $this->MKegiatan->updatekegiatan($mst_id_kegiatan, $data); 
                            redirect('admin');
                    }
                    else
                        {
                        
                        // $this->load->model('Madmin');
                        // $this->load->model('Mbagian');
                        // $this->load->model('Mdivisi');
                        // $this->load->model('Mstatus');
                        // $data['stat']=$this->Mstatus->getallstatus('mst_status');
                        // $data['bag']=$this->Mbagian->getallbagian('mst_bagian');
                        // $data['divs']=$this->Mdivisi->getalldivisi('mst_divisi');
                        
                        $this->load->view('template/view_index', $data);
                        }
                }


    }


}



    


/* End of file Kegiatan.php */
/* Location: ./application/controllers/Kegiatan.php */