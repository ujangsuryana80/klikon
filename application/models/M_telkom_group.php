<?php

class M_telkom_group extends CI_Model
{
	function __construct() {
        parent::__construct();
    }

    function read_telkom_group(){
    	$sql = "SELECT * FROM tb_produk WHERE dt_status=1 AND dt_pg='pgtelkom'";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function read_detail_telkom_group($idData){
    	$sql = "select * from tb_produk where idData ='".$idData."'";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}