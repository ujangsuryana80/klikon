<?php

class M_tv_berlangganan extends CI_Model
{
	function __construct() {
        parent::__construct();
    }

    function read_tv_berlangganan(){
    	$sql = "SELECT * FROM tb_produk WHERE dt_status=1 AND dt_pg='pgtv'";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function read_detail_tv_berlangganan($idData){
    	$sql = "select * from tb_produk where idData ='".$idData."'";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}