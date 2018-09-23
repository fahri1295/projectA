<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Muser extends CI_Model {

		 function login($user,$pass) {
			$this->db->select('mst_user.mst_NRP,mst_user.mst_username,mst_user.mst_name_user,mst_user.mst_password, mst_user.mst_id_divisi,mst_divisi.mst_name_divisi,mst_user.mst_id_bagian,mst_bagian.mst_name_bagian');
	        $this->db->join('mst_divisi','mst_divisi.mst_id_divisi=mst_user.mst_id_divisi');
	        $this->db->join('mst_bagian','mst_bagian.mst_id_bagian=mst_user.mst_id_bagian');
			$this->db->from('mst_user');
			$this->db->where('mst_username', $user);
			$this->db->where('mst_password', $pass);
			$this->db->limit(1);


			$query = $this->db->get();
		
			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return false;
			}
		}

	}

?>