<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Pengaturan tanggal komputer
date_default_timezone_set("Asia/Jakarta");
class Auth extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_login', 'lgn');
    }

    function cek(){
		// $mb_Email = $this->input->post('mb_Email');
		// $mb_password = $this->input->post('mb_Password');
		// $login = $this->lgn->ceklogin($mb_Email,$mb_password);
		// //var_dump($login);
		// if($login==1){
		// 	$data['mb_Email']=$mb_Email;
		// 	//$data['mb_password']=$mb_password;
		// 	$data['message_error'] = 0;
		// 	$this->load->view('login/verifikasi', $data);
		// }else{
		// 	$tmp['message_error'] = 1;
		// 	$this->load->view('login/login', $tmp);
		// }
		redirect(base_url().'admin');
	}

	function cek_token(){
		// $mb_Email = $this->input->post('mb_Email');
		// $mb_Token = $this->input->post('mb_Token');
		// $mb_TokenVal = $this->input->post('mb_TokenVal');
		// $token = $this->lgn->cekToken($mb_Token, $mb_TokenVal);

		// if($token==1){
	 //        //Set session
	 //        $this->session->set_userdata('ses_user_name', $mb_Email);

		// 	redirect(base_url().'admin');
		// 	// $this->load->view('main/admin');
		// }else{
		// 	$tmp['message_error'] = 1;
		// 	$tmp['mb_Email']=$mb_Email;
		// 	$this->load->view('login/verifikasi', $tmp);
		// }
		redirect(base_url().'admin');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}

	/*function register(){
		$dtDate = date("Y-m-d");
		$dtTime = date("h:i:s");
		$mb_Username = $this->input->post('mb_Username');
		$mb_Password = $this->input->post('mb_Password');
		$mb_KTP = $this->input->post('mb_KTP');
		$mb_Email = $this->input->post('mb_Email');
		$mb_NoHP = $this->input->post('mb_NoHP');
		$mb_Kota = $this->input->post('mb_Kota');
		$mb_Kecamatan = $this->input->post('mb_Kecamatan');

		$data = array('dtDate' => $dtDate,
					  'dtTime' => $dtTime,
					  'mb_Username' => $mb_Username,
					  'mb_Password' => md5($mb_Password),
					  'mb_KTP' => $mb_KTP,
					  'mb_Email' => $mb_Email,
					  'mb_NoHP' => $mb_NoHP,
					  'mb_Kota' => $mb_Kota,
					  'mb_Kecamatan' => $mb_Kecamatan
		);

		$this->db->set($data);
		$result = $this->db->insert("tb_mbr");
		if($result){
			redirect(base_url()."login");
		}else{
			$this->load->view('login/register');
		}
	}*/
	
	/*function cek(){
		$mb_Email = $this->input->post('mb_Email');
		$mb_password = $this->input->post('mb_Password');
		$login = $this->lgn->ceklogin($mb_Email,$mb_password);
		//var_dump($login);
		if($login==1){
			$data['mb_Email']=$mb_Email;
			//$data['mb_password']=$mb_password;
			$data['message_error'] = 0;
			$this->load->view('login/verifikasi', $data);
		}else{
			$tmp['message_error'] = 1;
			$this->load->view('login/login', $tmp);
		}
	}*/

	/*function cek_token(){
		$mb_Email = $this->input->post('mb_Email');
		$mb_Token = $this->input->post('mb_Token');
		$mb_TokenVal = $this->input->post('mb_TokenVal');
		$token = $this->lgn->cekToken($mb_Token, $mb_TokenVal);

		if($token==1){
	        //Set session
	        $this->session->set_userdata('ses_user_name', $mb_Email);

			redirect(base_url().'admin');
			// $this->load->view('main/admin');
		}else{
			$tmp['message_error'] = 1;
			$tmp['mb_Email']=$mb_Email;
			$this->load->view('login/verifikasi', $tmp);
		}
	}
*/
	/*function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}*/

	function register(){
		$dtDate = date("Y-m-d");
		$dtTime = date("h:i:s");
		$mb_Username = $this->input->post('mb_Username');
		$mb_Password = $this->input->post('mb_Password');
		$mb_KTP = $this->input->post('mb_KTP');
		$mb_Email = $this->input->post('mb_Email');
		$mb_NoHP = $this->input->post('mb_NoHP');
		$mb_Kota = $this->input->post('mb_Kota');
		$mb_Kecamatan = $this->input->post('mb_Kecamatan');
		$dtToken	= strtoupper(substr(md5(date("Ymd").strtoupper(session_id()).date("His")), 0,8));
		$AgenLevel='';
		$AgenUpline='';

		$this->load->library('OlplusPesan');
		$this->load->library('MCrypt');
		

		$message  = "DAFTAR.".str_replace(".", "!", $mb_Username).".".str_replace(".", "!", $mb_Kota).".".str_replace(".", "!", $mb_Kecamatan).".".str_replace(".", "!", $mb_NoHP).".".str_replace(".", "!", $mb_Email).".OUTLET|VIAMOBILE|".$mb_Password."|".$mb_KTP."|".$AgenUpline."|".$AgenLevel.".IPN";

		$result   	= sendRelayCurlRegister($message);
		$result   	= trim($result);
      	$sList_RSP  = explode(";", $result);
      	/*var_dump($sList_RSP);
      	exit;*/
      	if($sList_RSP[3]!='Aktivasi Berhasil'){
				//echo "Pendaftaran Gagal"."<br>";
				//echo $result."<br>";
				$error	= $sList_RSP[2]." : ".$sList_RSP[3]." ".$sList_RSP[4];
		}else{
				if ($result) {
					
					$this->olplusPesan->sendEmail_ValidasiDaftar($mb_Email, $mb_Username, md5($dtToken));
					//SEND MAIL VALIDASI
					$mb_Token = sha1($sList_RSP[7]);
					$data = array('dtDate' => $dtDate,
					  'dtTime' => $dtTime,
					  'mb_Username' => $mb_Username,
					  'mb_Password' => md5($mb_Password),
					  'mb_KTP' => $mb_KTP,
					  'mb_Email' => $mb_Email,
					  'mb_NoHP' => $mb_NoHP,
					  'mb_Kota' => $mb_Kota,
					  'mb_Kecamatan' => $mb_Kecamatan,
					  'mb_Token' => $mb_Token,
					  'mb_TokenVal' => md5($dtToken),
					  'mb_TokenReturn' => $this->mcrypt->encrypt($result)
					);

					$this->db->set($data);
					$result = $this->db->insert("tb_mbr");
					if($result){
						redirect(base_url()."login");
					}else{
						$this->load->view('login/register');
					}

					$error	= "Pendaftaran Berhasil. Periksa email Anda, untuk validasi.";
			}
		
		}

	}
}