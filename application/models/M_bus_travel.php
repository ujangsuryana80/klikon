<?php

class M_bus_travel extends CI_Model
{
	function __construct() {
        parent::__construct();
    }

    function comboAgentravel(){
        $sql = 'SELECT nmAgen,kdAgen FROM tb_kode_ttux_agen GROUP BY nmAgen';
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }

    function comboKota(){
        $sql = 'SELECT kotaAsal FROM tb_kode_ttux_agen_jurusan GROUP BY kotaAsal';
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }

    function comboKotadetail($kotaAsal){
        $sql = "SELECT cabangAsal FROM tb_kode_ttux_agen_jurusan WHERE kotaAsal ='".$kotaAsal."' GROUP BY cabangAsal ";
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }

    function comboKotaTujuan(){
        $sql = 'SELECT kotaTujuan FROM tb_kode_ttux_agen_jurusan GROUP BY kotaTujuan';
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }

    function comboKotaTujuandetail($kotaTujuan){
        $sql = "select cabangTujuan from tb_kode_ttux_agen_jurusan where kotaTujuan ='".$kotaTujuan."' GROUP BY cabangTujuan ";
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }

    function getBusTravel($cabangAsal,$cabangTujuan,$kodeAgen){
        $sql = "select * from tb_kode_ttux_agen_jurusan where kdAgen='".$kodeAgen."' and cabangAsal='".$cabangAsal."' and cabangTujuan='".$cabangTujuan."'";
        $query = $this->db->query($sql);
        return $query->row_array();
        
    }


   
}
