<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesawat extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('M_Pesawat', 'pswt');
    }

    function combo_pesawat_n(){
    	$negara = $this->pswt->comboNegara();
    	$html = '';
        $html .= "<option value=''></option>";
    	for($i=0; $i<count($negara); $i++){                    	
    			$html .= "<option value=".$negara[$i]['dtCountry'].">".$negara[$i]['dtCountry']."</option>";   		

    	}

    	echo $html;
    	exit;
    }

    function combo_pesawat(){
        $dtCountry = $this->input->post('dtCountry');
        $kota = $this->pswt->comboKota($dtCountry);
        $html = '';
        $html .= "<option value=''></option>"; 
        for($i=0; $i<count($kota); $i++){                 
                $html .= "<option value=".$kota[$i]['dtPenerbangan'].">".$kota[$i]['dtPenerbangan']."</option>";
        }

        echo $html;
        exit;
    }

    function infoJadwalDetail(){
        $kotaAsal=$this->input->post('kotaAsal');
        $kotaTujuan=$this->input->post('kotaTujuan'); 
        $tanggal =$this->input->post('tanggal'); 
        $dewasa =$this->input->post('dewasa'); 
        $anak =$this->input->post('anak'); 
        $bayi =$this->input->post('bayi');        
            $message    = "TIKET.AIRLINES.SCHEDULE.EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942&".$kotaAsal."=?&".$kotaTujuan."=?&".$tanggal."=?";
            $result     = sendRelayCurl($message);
            $result     = json_decode($result);
            $tmp = array();
            $i = 0;
            foreach ($result as $row) {
                $tmp[$i]['flight'] = $row->flight;
                $tmp[$i]['flight_code'] = $row->flight_code;
                $tmp[$i]['flight_route'] = $row->flight_route;
                $tmp[$i]['flight_transit'] = $row->flight_transit;
                $tmp[$i]['flight_datetime'] = $row->flight_datetime;
                $tmp[$i]['flight_price'] = $row->flight_price;                
                $i++;
            }

            $data['items'] = $tmp;

            $this->load->view('pesawat/informasi_jadwal_detail', $data);            

        
    }

    function infoHarga(){
        $kotaAsal=$this->input->post('kotaAsal');
        $kotaTujuan=$this->input->post('kotaTujuan'); 
        $tanggal =$this->input->post('tanggal'); 
        $dewasa =$this->input->post('dewasa'); 
        $anak =$this->input->post('anak'); 
        $bayi =$this->input->post('bayi');
        $flight =$this->input->post('flight');
        $flight_code =$this->input->post('flight_code');
        $flight_transit =$this->input->post('flight_transit');
        $flight_datetime =$this->input->post('flight_datetime');
        $flight_route =$this->input->post('flight_route');
        $flight_price =$this->input->post('flight_price');

        $message    = "TIKET.AIRLINES.CHECK.EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942&".$kotaAsal."=?&".$kotaTujuan."=?&".$tanggal."=?&".$flight_code."=?&1=?&0=?&0=?";
        $result     = sendRelayCurl($message);
        $result     = json_decode($result);
        $tmp = array();            
            
                $tmp['result'] = $result->result;
                $tmp['flight_code'] = $result->flight_code;
                $tmp['flight_seat'] = $result->flight_seat;
                $tmp['flight_from'] = $result->flight_from;
                $tmp['flight_to'] = $result->flight_to;             
                $tmp['flight_date'] = $result->flight_date;             
                $tmp['adult'] = $result->adult;                
                $tmp['child'] = $result->child; 
                $tmp['infant'] = $result->infant; 
                $tmp['publish'] = $result->publish; 
                $tmp['tax'] = $result->tax; 
                $tmp['totalfare'] = $result->totalfare;            
            

            $this->load->view('pesawat/informasi_harga_detail', $tmp); 

    }

    function dataBooking(){
        $MasaPassport=$this->input->post('MasaPassport');
        $anak=$this->input->post('anak'); 
        $bayi =$this->input->post('bayi'); 
        $beratBagasi =$this->input->post('beratBagasi'); 
        $dewasa =$this->input->post('dewasa'); 
        $email =$this->input->post('email');
        $flight_code =$this->input->post('flight_code');
        $flight_date =$this->input->post('flight_date');
        $flight_from =$this->input->post('flight_from');
        $flight_seat =$this->input->post('flight_seat');
        $flight_to =$this->input->post('flight_to');
        $hp =$this->input->post('hp');
        $namaPanggilan =$this->input->post('namaPanggilan');
        $namaPenumpang =$this->input->post('namaPenumpang');
        $noPssprt =$this->input->post('noPssprt');
        $publish =$this->input->post('publish');
        $status =$this->input->post('status');
        $tax =$this->input->post('tax');
        $tglLahir =$this->input->post('tglLahir');
        $totalfare =$this->input->post('totalfare');       
        $tanggal =$this->input->post('tanggal');
        $flight =$this->input->post('flight');
        $flight_price =$this->input->post('flight_price');
        $kotaAsal =$this->input->post('kotaAsal');
        $kotaTujuan =$this->input->post('kotaTujuan');

        $message    = "TIKET.AIRLINES.BOOKING.EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942&".$flight_from."=?&".$flight_to."=?&".$tanggal."=?&".$flight_code."=?&2=?&0=?&0=?&".$email."=?&".$hp."=?&".$namaPanggilan.".".$namaPenumpang."=?&".$tglLahir."=?&".$beratBagasi."=?&".$noPssprt."=?&".$MasaPassport."=?";
        $result     = sendRelayCurl($message);
        $result     = json_decode($result);
        $tmp = array();            
            
                $tmp['result'] = $result->result;
                $tmp['flight_code'] = $result->flight_code;
                $tmp['flight_seat'] = $result->flight_seat;
                $tmp['kodebooking'] = $result->kodebooking;
                $tmp['publish'] = $result->publish;             
                $tmp['tax'] = $result->tax;             
                $tmp['totalfare'] = $result->totalfare;                
                $tmp['bonus'] = $result->bonus; 
                $tmp['timelimit'] = $result->timelimit;

            $this->load->view('pesawat/data_booking_detail', $tmp); 

    }

    function statusPengecekan(){
        $kodebooking=$this->input->post('kodebooking');
        $totalfare=$this->input->post('totalfare');        

        $message    = "TIKET.AIRLINES.ISSUED.".$kodebooking.".EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942";
        $result     = sendRelayCurl($message);
        $result     = json_decode($result);
        $tmp = array();            
            
                $tmp['result'] = $result->result;
                $tmp['reason'] = $result->reason;               

            $this->load->view('pesawat/status_pengecekan_detail', $tmp); 

    }

    
}