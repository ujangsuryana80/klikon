<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function sendRelayCurl($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://192.168.3.11/edc/devel/sim_mlm/?");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayBustravel2($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/json/bus_travel_promo.json");
        //curl_setopt($ch, CURLOPT_URL, "http://localhost/json/bus_travel_non_promo.json");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayBusTravel1($message){
    $x          = "";
    //$message    = str_replace("IP", "192#*168#*3#*231", $message);
   //$message    = str_replace("PIN", "160923638930", $message);
    //$message    = str_replace("SESSEC", "509ecdd8e90339f48a9a7ca85f3f0cc0", $message);

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/json/layout_kursi.json");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayBustravel3($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/json/status_inquiry.json");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayBustravel4($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/json/informsi_payment.json");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurlPesawat($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/json/pesawat.json");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurlPesawat2($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/json/pesawat_informasi_harga.json");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurlPesawatBooking($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/json/pesawat_booking.json");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurlPesawatPayment($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/json/pesawat_payment.json");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}


function sendRelayCurlPulsaInternet($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/pulsaInternterGame");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelaytelkom1($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/telkom1");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelaytelkom2($message){
    $x          = "";

    try {
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/telkom2");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}
function sendRelayCurlAdviceTelkom2($message){
    $x          = "";

    try {
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/AdviceTelkom2");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelaytv1($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/tv1");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelaytv2($message){
    $x          = "";

    try {
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/tv2");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelaypln1($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/pln1");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayleasing1($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/leasing1");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelaypulsaPascabayar($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/pulsaPascabayar1");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelaypln2($message){
    $x          = "";

    try {
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/pln2");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayleasing2($message){
    $x          = "";

    try {
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/leasing2");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelaypulsapascabayar2($message){
    $x          = "";

    try {
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/pulsapascabayar2");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}


function sendRelayCurlAdvicePln($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/advice");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}


function sendRelayCurlAdvicePulsaPascabayar2($message){
    $x          = "";

    try {
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/AdvicePulsaPascabayar2");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurlAdvicePln2($message){
    $x          = "";

    try {
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/AdvicePln2");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurlAdviceLeasing2($message){
    $x          = "";

    try {
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/AdviceLeasing2");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurlAdvicetv2($message){
    $x          = "";

    try {
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/Advicetv2");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurl5($message){
    $x          = "";

    try {
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/test2");
        //curl_setopt($ch, CURLOPT_URL, "http://localhost/json/informsi_payment.json");
        //curl_setopt($ch, CURLOPT_URL, "http://192.168.3.11/edc/devel/sim_mlm/?");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function format_angka($angka) {
    $hasil =  number_format($angka,0, ",",".");
    return $hasil;
}

function sendRelaybpjs($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/bpjs");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelaypdam($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/pdam");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurlKeretaApi($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/json/kereta_api.json");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurlKeretaApi2($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/json/info_data_pemesanan.json");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurlKeretaApi3($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/json/kereta_api_informasi_data_pemesanan.json");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurlKeretaApi4($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/json/kereta_api_payment.json");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurlKeretaApi5($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/json/kereta_api_payment.json");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}

function sendRelayCurlRegister($message){
    $x          = "";

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/klikon/welcome/register");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "EDC=$message");   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $x = curl_exec($ch);
        curl_close($ch);

        return $x;
    }catch (Exception $e) {
        return curl_error($ch);
    }   
}