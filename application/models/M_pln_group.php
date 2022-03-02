<?php

class M_pln_group extends CI_Model
{
	function __construct() {
        parent::__construct();
    }

    function read_pln_group(){
    	$sql = "SELECT * FROM tb_produk WHERE dt_status=1 AND dt_pg='pgpln'";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function read_detail_pln_group($idData){
    	$sql = "select * from tb_produk where idData ='".$idData."'";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}