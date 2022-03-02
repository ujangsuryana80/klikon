<?php

class M_login extends CI_Model
{
	function __construct() {
        parent::__construct();
    }

    function ceklogin($mb_Email,$mb_Password){
        $sql = "SELECT * FROM tb_mbr WHERE mb_Email='".$mb_Email."' and mb_Password = '".md5($mb_Password)."'";
        $query = $this->db->query($sql);
        return $query->num_rows();
        //$query->row_array();
        
    }

    function cekToken($mb_Token,$mb_TokenVal){
        $sql = "SELECT * FROM tb_mbr WHERE mb_Token='".md5($mb_Token)."' and mb_TokenVal = '".md5($mb_TokenVal)."'";
        $query = $this->db->query($sql);
        return $query->num_rows();
        //$query->row_array();
        
    }
   
}
