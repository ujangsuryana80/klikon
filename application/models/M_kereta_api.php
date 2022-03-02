<?php

class M_kereta_api extends CI_Model
{
	function __construct() {
        parent::__construct();
    }


    function comboKota(){
        $sql = 'SELECT dtKota FROM tb_kode_railway group by dtKota';
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }

    function comboKotadetail($dtKota){
        $sql = "SELECT dtNama FROM tb_kode_railway WHERE dtKota ='".$dtKota."' group by dtNama";
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }



   
}
