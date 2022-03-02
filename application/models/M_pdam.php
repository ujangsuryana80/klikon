<?php

class M_pdam extends CI_Model
{
	function __construct() {
        parent::__construct();
    }

    function combopdam(){
        $sql = "SELECT dt_value FROM tb_produk WHERE dt_pg='pgpdam'";
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
   
}
