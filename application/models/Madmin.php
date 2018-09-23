<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	function insert($data){
        $this->db->insert('mst_user',$data);
        return $this->db->insert_id();
    }

	function getall($table){
	        $this->db->select('mst_user.mst_id_user, mst_user.mst_username,mst_user.mst_name_user,mst_user.mst_NRP, mst_user.mst_password, mst_user.mst_id_bagian, mst_user.mst_id_divisi,  mst_bagian.mst_name_bagian,mst_divisi.mst_name_divisi');
	        $this->db->join('mst_bagian','mst_bagian.mst_id_bagian=mst_user.mst_id_bagian');
	        $this->db->join('mst_divisi','mst_divisi.mst_id_divisi=mst_user.mst_id_divisi');
	        $data = $this->db->get($table);
	        return $data->result_array();
	 }

	 function updateuser($mst_id_user,$data)
    {
       $this->db->where('mst_id_user',$mst_id_user);
        return $this->db->update('mst_user',$data);
    }

    function delete($mst_id_user){
        $response = $this->db->delete('mst_user',array('mst_id_user'=>$mst_id_user));
        if($response)
        {
            return "successfully";
        }
        else
        {
            return "Error occuring while deleting menu";
        }
    }

    function getuser($mst_id_user)
    {
        return $this->db->get_where('mst_user',array('mst_id_user'=>$mst_id_user))->row_array();
    }
    
}

/* End of file Madmin.php */
/* Location: ./application/models/Madmin.php */