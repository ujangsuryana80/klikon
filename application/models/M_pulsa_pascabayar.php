<?php

class M_pulsa_pascabayar extends CI_Model
{
	function __construct() {
        parent::__construct();
    }

    function read_pulsa_pascabayar(){
    	$sql = "SELECT * FROM tb_produk WHERE dt_status=1 AND dt_pg='pgpascabayar'";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function read_detail_pulsa_pascabayar($idData){
    	$sql = "select * from tb_produk where idData ='".$idData."'";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}