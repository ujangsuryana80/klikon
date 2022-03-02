<?php

class M_leasing extends CI_Model
{
	function __construct() {
        parent::__construct();
    }

    function read_leasing(){
    	$sql = "SELECT * FROM tb_produk WHERE dt_status=1 AND dt_pg='pgmulti'";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function read_detail_leasing($idData){
    	$sql = "select * from tb_produk where idData ='".$idData."'";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}