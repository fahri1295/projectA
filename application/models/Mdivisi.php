<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdivisi extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    function getdivisi($mst_id_divisi)
    {
        return $this->db->get_where('mst_divisi',array('mst_id_divisi'=>$mst_id_divisi))->row_array();
    }
    
    /*
     * Get all cate_menus
     */
    function getalldivisi()
    {
        return $this->db->get('mst_divisi')->result_array();
    }

}

/* End of file Mdivisi.php */
/* Location: ./application/models/Mdivisi.php */