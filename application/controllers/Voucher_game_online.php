<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher_game_online extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('M_voucher_game_online', 'vgmo');
    }

	function read(){
    	$data['items'] = $this->vgmo->read_voucher_game();
    	$this->load->view('main/item_voucher_game', $data);

    }

     function readCombo(){
        $data = $this->vgmo->read_voucher_game();
        $html = '';
        for($i=0; $i<count($data); $i++){
            $html .= "<option value='".$data[$i]['dt_value']."'>".$data[$i]['dt_ket']."</option>";
        }

        echo $html;
        exit;
    }

    function read_detail(){
    	$idd = $this->input->post('dt_value');
    	$data['items'] = $this->vgmo->read_voucher_game_detail($idd);
        //var_dump($data['items']);
        //exit;

    	$this->load->view('main/item_voucher_game_detail', $data);
        
    }
	
}
