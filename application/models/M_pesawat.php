<?php

class M_Pesawat extends CI_Model
{
	function __construct() {
        parent::__construct();
    }


    function comboNegara(){
        $sql = 'SELECT dtCountry FROM tb_kode_airlines GROUP BY dtCountry';
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }

    function comboKota($dtCountry){
        $sql = "select * from tb_kode_airlines where dtCountry ='".$dtCountry."' GROUP BY dtPenerbangan";
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
   
}
