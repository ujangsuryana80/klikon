<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus_travel extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('M_bus_travel', 'bstr');
    }

    function combo_agen(){
    	$agen = $this->bstr->comboAgentravel();
    	//var_dump($agen);
    	//exit;
        $html = '';
        $html .= "<option value=''></option>"; 
    	for($i=0; $i<count($agen); $i++){
    		$html .= "<option value=".$agen[$i]['kdAgen'].">".$agen[$i]['nmAgen']."</option>";
    	}

    	echo $html;
    	exit;
    }

    function combo_kota(){
    	$kota = $this->bstr->comboKota();
    	$html = '';
        $html .= "<option value=''></option>"; 
    	for($i=0; $i<count($kota); $i++){
    		$html .= "<optgroup label='".$kota[$i]['kotaAsal']."'><br>";

    		$kotaDetail = $this->bstr->comboKotadetail($kota[$i]['kotaAsal']);

    		for($j=0; $j<count($kotaDetail); $j++){
    			$html .= "<option value=".$kotaDetail[$j]['cabangAsal'].">".$kotaDetail[$j]['cabangAsal']."</option>";
    		}

    		$html .= "</optgroup>";
    	}

    	echo $html;
    	exit;
    }

    function combo_kota_tujuan(){
        $kota_tujuan = $this->bstr->comboKotaTujuan();
        $html = '';
        $html .= "<option value=''></option>"; 
        for($i=0; $i<count($kota_tujuan); $i++){
            $html .= "<optgroup label='".$kota_tujuan[$i]['kotaTujuan']."'><br>";

            $kotaTujuanDetail = $this->bstr->comboKotaTujuandetail($kota_tujuan[$i]['kotaTujuan']);

            for($j=0; $j<count($kotaTujuanDetail); $j++){
                $html .= "<option value=".$kotaTujuanDetail[$j]['cabangTujuan'].">".$kotaTujuanDetail[$j]['cabangTujuan']."</option>";
            }

            $html .= "</optgroup>";
        }

        echo $html;
        exit;
    }

    function infoJadwalDetail(){
        $cabangAsal=$this->input->post('cabangAsal');
        $cabangTujuan=$this->input->post('cabangTujuan'); 
        $kodeAgen =$this->input->post('agen'); 
        $tanggal =$this->input->post('tanggal'); 
        $items = $this->bstr->getBusTravel($cabangAsal,$cabangTujuan,$kodeAgen);
        if($items){
            $message    = "TIKET.TRAVEL.JADWAL.".$kodeAgen.".".$items['id'].".".$tanggal.".EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942";
            $result     = sendRelayCurl($message);
            $result     = json_decode($result);
            $tmp = array();
            $i = 0;
            foreach ($result->olplus->results->jadwal as $row) {
                $tmp[$i]['kode'] = $row->kode;
                $tmp[$i]['jam_berangkat'] = $row->jam_berangkat;
                $tmp[$i]['layout_kursi'] = $row->layout_kursi;
                $tmp[$i]['jumlah_kursi'] = $row->jumlah_kursi;
                $tmp[$i]['jumlah_booking'] = $row->jumlah_booking;
                $tmp[$i]['hargaTiket'] = $result->olplus->results->hargaTiket;
                $tmp[$i]['kodeAgen'] = $kodeAgen;
                $tmp[$i]['cabangAsal'] = $cabangAsal;
                $tmp[$i]['cabangTujuan'] = $cabangTujuan;
                $tmp[$i]['idJurusan'] = $items['id'];
                $tmp[$i]['tanggal'] = $tanggal;
                $tmp[$i]['jumlahPenumpang'] = $this->input->post('jumlahPenumpang');
                $tmp[$i]['namaAgen'] = $this->input->post('namaAgen');
                
                if(isset($row->promo)){
                    $tmp[$i]['promo'] = $row->promo->potongan;
                }else{
                    $tmp[$i]['promo'] = 0;
                }

                $i++;
            }

            $data['items'] = $tmp;

            $this->load->view('bus_travel/informasi_jadwal_detail', $data);
        }else{
            ?>
        <script language="javascript"> 
      alert("Maaf, Tiket TRAVEL & BUS yang Anda cari saat ini tidak tersedia, TERIMA KASIH.. "); 
      </script>
        <?php
        $this->load->view('bus_travel/bus_travel');
        }     
        

        
    }

    function infoDataBooking(){
        $kode = $this->input->post('kode');  
        $layoutKursi = $this->input->post('layoutKursi');  
        $kodeAgen = $this->input->post('kodeAgen');  
        $cabangAsal = $this->input->post('cabangAsal');  
        $cabangTujuan = $this->input->post('cabangTujuan');  
        $jamBerangkat = $this->input->post('jamBerangkat');  
        $jumlahKursi = $this->input->post('jumlahKursi');          
        $promo = $this->input->post('promo');          
        $hargaTiket = $this->input->post('hargaTiket');
        $idJurusan = $this->input->post('idJurusan');         
        $tanggal = $this->input->post('tanggal');

        $message    = "TIKET.TRAVEL.JADWALLAYOUT.".$kodeAgen.".".$layoutKursi.".EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942";
        $result     = sendRelayCurl($message);
        $result     = json_decode($result);
        $tmp = array();
        $lk = '';
        $sisaKursi = 0;
        $kurisTersedia = array();
        foreach ($result->olplus->results as $row) {
             $lk .= $row.',';
             $sisaKursi++;
             $kurisTersedia[]=$row;
        }
        $tmp['kode'] = $kode; 
        $tmp['kodeAgen'] = $kodeAgen; 
        $tmp['cabangAsal'] = $cabangAsal; 
        $tmp['cabangTujuan'] = $cabangTujuan; 
        $tmp['jamBerangkat'] = $jamBerangkat; 
        $tmp['jumlahKursi'] = $jumlahKursi; 
        $tmp['promo'] = $promo; 
        $tmp['hargaTiket'] = $hargaTiket; 
        $tmp['layoutKursi'] = substr($lk, 0, -1);         
        $tmp['sisaKursi'] = $sisaKursi;
        $tmp['kurisTersedia'] = $kurisTersedia;
        $tmp['idJurusan'] = $idJurusan;
        $tmp['tanggal'] = $tanggal;
        $tmp['jumlahPenumpang'] = $this->input->post('jumlahPenumpang');
        $tmp['namaAgen'] = $this->input->post('namaAgen');

        $this->load->view('bus_travel/data_booking_detail', $tmp);

    }

}