<?php

class M_voucher_game_online extends CI_Model
{
	function __construct() {
        parent::__construct();
    }

    function read_voucher_game(){
    	$sql = "SELECT * FROM tb_produk WHERE dt_status=1 AND dt_pg='pgvouchergame'";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function read_voucher_game_detail($id){
        $sql = "SELECT a.dt_denom, a.dt_harga_1,a.dt_value, a.idData, b.dt_image, b.dt_ket, a.dt_ket as dt_ketdetail FROM tb_produk_detail a 
                LEFT JOIN tb_produk b ON a.dt_value = b.dt_value
                WHERE a.dt_status=1 AND UPPER(a.dt_value)= UPPER('".$id."') AND dt_pg= 'pgvouchergame' group by dt_denom";
        
        $query = $this->db->query($sql);
        return $query->result_array(); //untuk menampilkan banyak  data
    }

}
