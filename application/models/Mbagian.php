<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbagian extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    function getbagian($mst_id_bagian)
    {
        return $this->db->get_where('mst_bagian',array('mst_id_bagian'=>$mst_id_bagian))->row_array();
    }
    
    /*
     * Get all cate_menus
     */
    function getallbagian()
    {
        return $this->db->get('mst_bagian')->result_array();
    }

}

/* End of file Mbagian.php */
/* Location: ./application/models/Mbagian.php */