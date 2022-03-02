<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kereta_api extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('M_kereta_api', 'krt');
    }

    function combo_kota(){
    	$kota = $this->krt->comboKota();
    	$html = '';
        $html .= "<option value=''></option>"; 
    	for($i=0; $i<count($kota); $i++){
    		$html .= "<optgroup label='".$kota[$i]['dtKota']."'><br>";

    		$kotaDetail = $this->krt->comboKotadetail($kota[$i]['dtKota']);

    		for($j=0; $j<count($kotaDetail); $j++){
    			$html .= "<option value='".$kotaDetail[$j]['dtNama']."'>".$kotaDetail[$j]['dtNama']."</option>";
    		}

    		$html .= "</optgroup>";
    	}

    	echo $html;
    	exit;
    }



    function infoJadwalDetail(){
        $kotaAsal=$this->input->post('kotaAsal');
        $kotaTujuan=$this->input->post('kotaTujuan'); 
        $dewasa =$this->input->post('dewasa'); 
        $bayi =$this->input->post('bayi'); 
        $tanggal =$this->input->post('tanggal');

            $message    = "TIKET.KAI.GETSCHEDULE.EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942&".$kotaAsal."=?&".$kotaTujuan."=?&".$tanggal."=?&1=?&0=?&0=?";
            $result     = sendRelayCurl($message);
            $result = json_decode($result);
            /* start */
            $data['items1'] = $result->search_info;
            $data['items2'] = $result->schedule->depart;

            $this->load->view('kereta_api/informasi_jadwal_kereta_api_detail', $data);
        }

    function infoDataPemesanan(){
        $kotaAsal = $this->input->post('kotaAsal');  
        $kotaTujuan = $this->input->post('kotaTujuan');  
        $dewasa = $this->input->post('dewasa');  
        $bayi = $this->input->post('bayi');  
        $tanggal = $this->input->post('tanggal');  
        $perjalanan = $this->input->post('perjalanan');  
        $namaKereta = $this->input->post('namaKereta');          
        $noKereta = $this->input->post('noKereta');          
        $waktuBerangkat = $this->input->post('waktuBerangkat');
        $tglBerangkat = $this->input->post('tglBerangkat');         
        $classes = $this->input->post('classes');
        $subClass = $this->input->post('subClass');
        $sisaKursi = $this->input->post('sisaKursi');
        $hargaDewasa = $this->input->post('hargaDewasa');
        $hargabayi = $this->input->post('hargabayi');

        $message    = "TIKET.KAI.GETPRICE.EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942=?&".$noKereta."=?&".$namaKereta."=?&".$subClass."=?";
        $result     = sendRelayCurl($message);
        $result     = json_decode($result);
        $data['items'] = $result;

        $this->load->view('kereta_api/informasi_data_pemesanan_detail', $data);

    }

    function infoDataBooking(){
        $kotaAsal = $this->input->post('kotaAsal');  
        $kotaTujuan = $this->input->post('kotaTujuan');  
        $dewasa = $this->input->post('dewasa');  
        $bayi = $this->input->post('bayi');  
        $tanggal = $this->input->post('tanggal');  
        $perjalanan = $this->input->post('perjalanan');  
        $namaKereta = $this->input->post('namaKereta');          
        $noKereta = $this->input->post('noKereta');          
        $waktuBerangkat = $this->input->post('waktuBerangkat');
        $tglBerangkat = $this->input->post('tglBerangkat');         
        $classes = $this->input->post('classes');
        $subClass = $this->input->post('subClass');
        $sisaKursi = $this->input->post('sisaKursi');
        $hargaDewasa = $this->input->post('hargaDewasa');
        $hargabayi = $this->input->post('hargabayi');
        $namaPemesan = $this->input->post('namaPemesan');
        $noHp = $this->input->post('noHp');
        $email = $this->input->post('email');
        $namapenumpang1 = $this->input->post('namapenumpang1');
        $noidentitas1 = $this->input->post('noidentitas1');
        $nohp1 = $this->input->post('nohp1');
        $tanggal1 = $this->input->post('tanggal1');
        $namapenumpang2 = $this->input->post('namapenumpang2');
        $noidentitas2 = $this->input->post('noidentitas2');
        $nohp2 = $this->input->post('nohp2');
        $tanggal2 = $this->input->post('tanggal2');
        $namapenumpang3 = $this->input->post('namapenumpang3');
        $noidentitas3 = $this->input->post('noidentitas3');
        $nohp3 = $this->input->post('nohp3');
        $tanggal3 = $this->input->post('tanggal3');
        $namapenumpang4 = $this->input->post('namapenumpang4');
        $noidentitas4 = $this->input->post('noidentitas4');
        $nohp4 = $this->input->post('nohp4');
        $tanggal4 = $this->input->post('tanggal4');
        $session_id = $this->input->post('session_id');

        if((($noidentitas2 =='')and($noidentitas3 ==''))and($noidentitas4 =='')){
            $message = "TIKET.KAI.BOOKING.EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942&".$session_id."=?&".$namaPemesan."=?&".$noHp."=?&".$email."=?&adult=?&".$namapenumpang1."=?&".$noidentitas1."=?&".$nohp1."=?&".$tanggal1."=?";
        }else if(($noidentitas3 =='')and($noidentitas4 =='')){        
            $message = "TIKET.KAI.BOOKING.EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942&".$session_id."=?&".$namaPemesan."=?&".$noHp."=?&".$email."=?&adult=?&".$namapenumpang1."=?&".$noidentitas1."=?&".$nohp1."=?&".$tanggal1."=?&adult=?&".$namapenumpang2."=?&".$noidentitas1."=?&".$nohp2."=?&".$tanggal2."=?";
        }else if($noidentitas4 ==''){
            $message = "TIKET.KAI.BOOKING.EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942&".$session_id."=?&".$namaPemesan."=?&".$noHp."=?&".$email."=?&adult=?&".$namapenumpang1."=?&".$noidentitas1."=?&".$nohp1."=?&".$tanggal1."=?&adult=?&".$namapenumpang2."=?&".$noidentitas1."=?&".$nohp2."=?&".$tanggal2."=?&adult=?&".$namapenumpang3."=?&".$noidentitas3."=?&".$nohp3."=?&".$tanggal3."=?";
        }else{
            $message = "TIKET.KAI.BOOKING.EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942&".$session_id."=?&".$namaPemesan."=?&".$noHp."=?&".$email."=?&adult=?&".$namapenumpang1."=?&".$noidentitas1."=?&".$nohp1."=?&".$tanggal1."=?&adult=?&".$namapenumpang2."=?&".$noidentitas1."=?&".$nohp2."=?&".$tanggal2."=?&adult=?&".$namapenumpang3."=?&".$noidentitas3."=?&".$nohp3."=?&".$tanggal3."=?&adult=?&".$namapenumpang4."=?&".$noidentitas4."=?&".$nohp4."=?&".$tanggal4."=?";
        }

        //echo($message);
        $result     = sendRelayCurl($message);
        $result     = json_decode($result);
        $data['items'] = $result;
        $this->load->view('kereta_api/data_booking_detail', $data);
    }

    function infoDataPaytment(){
        $total = $this->input->post('total');  
        $kodeBooking = $this->input->post('kodeBooking'); 

        $message    = "TIKET.KAI.INQUIRY.".$kodeBooking.".EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942";
        $result     = sendRelayCurl($message);
        $result     = json_decode($result);
        $data['items'] = $result;
        
        $this->load->view('kereta_api/status_pengecekan_paytment_detail', $data);

    }

    function dataPaytmentAkhir(){  
        $kodeBooking = $this->input->post('kodeBooking');
        $message    = "TIKET.KAI.PAYMENT.".$kodeBooking.".EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942";
        $result     = sendRelayCurl($message);
        $result     = json_decode($result);
        $data['items'] = $result;
        
        $this->load->view('kereta_api/status_pengecekan_akhir_detail', $data);

    }


}