<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKegiatan extends CI_Model {

	function insert($data){
        $this->db->insert('mst_kegiatan',$data);
        return $this->db->insert_id();
    }

	function getall($table){
        $this->db->select('mst_kegiatan.mst_id_kegiatan, mst_kegiatan.mst_nama_kegiatan,mst_kegiatan.mst_isi_kegiatan, mst_kegiatan.mst_image_kegiatan, mst_kegiatan.mst_name_user, mst_kegiatan.mst_name_divisi, mst_kegiatan.mst_name_bagian, mst_kegiatan.mst_tanggal_kegiatan, mst_kegiatan.mst_name_image');
        
        $data = $this->db->get($table);
        return $data->result_array();

    }
    function getkegiatan($mst_id_kegiatan)
    {
        return $this->db->get_where('mst_kegiatan',array('mst_id_kegiatan'=>$mst_id_kegiatan))->row_array();
    }
    function delete($mst_id_kegiatan){
        $response = $this->db->delete('mst_kegiatan',array('mst_id_kegiatan'=>$mst_id_user));
        if($response)
        {
            return "successfully";
        }
        else
        {
            return "Error occuring while deleting menu";
        }
    }


    
}

/* End of file MKegiatan.php */
/* Location: ./application/models/MKegiatan.php */