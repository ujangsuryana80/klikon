<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class OlplusPesan{

		public function SMTPMailer($cmd, $dtEmail, $dtNama, $dtToken) { 
			require 'PHPMailerAutoload.php';
			define('GUSER', 'notifyklikon@gmail.com'); 			
			define('GPWD', 'butongFay2009butongCuk1986'); 		

			global $error;
			$toClient			= str_replace("!",".",$dtEmail);
			$mail 				= new PHPMailer();  		// create a new object
			$mail->isSMTP(); 								// enable SMTP
			$mail->SMTPDebug 	= 0;  						// debugging: 1 = errors and messages, 2 = messages only
			$mail->Debugoutput 	= 'html'; 
			$mail->Host 		= 'smtp.gmail.com';
			//$mail->Port 		= 465; 
			//$mail->SMTPSecure 	= 'ssl'; 				// secure transfer enabled REQUIRED for GMail
			$mail->Port 		= 587; 
			$mail->SMTPSecure 	= 'tls'; 					// secure transfer enabled REQUIRED for GMail
			$mail->SMTPAuth 	= true;  					// authentication enabled
			$mail->Username 	= GUSER;  
			$mail->Password 	= GPWD;           
			$mail->setFrom('donotreply@klikonlineplus.com', 'KLIKON');

			if( $cmd=="sendEmail_Token" ){
				$mail->Subject 		= 'Informasi Kode Verifikasi Login';
				$mail->Body 		= 'Dear Mitra OnlinePlus
'.strtoupper($dtNama).'

Gunakan data token '.$dtToken.' untuk digunakan dalam verifikasi LOGIN.
Terimakasih

Best & Regards,
https://www.klikonlineplus.com

PT. INDOTAMA PALAPA NUSANTARA
									';
			}elseif( $cmd=="sendEmail_ValidasiDaftar" ){
				$mail->Subject 		= 'Validasi Pendaftaran KlikOnlinePlus.com';
				$mail->Body 		= 'Dear Mitra OnlinePlus
'.strtoupper($dtNama).'

Klik link dibawah ini untuk validasi account.
https://www.klikonlineplus.com/v2.0/app/validasi/?nToken='.$dtToken.'
Terimakasih

Best & Regards,
https://www.klikonlineplus.com

PT. INDOTAMA PALAPA NUSANTARA
									';
			}elseif( $cmd=="sendEmail_InfoValidasi" ){
				$sList 				= explode(";", $dtToken);

				$mail->Subject 		= 'Informasi Account Validasi KlikOnlinePlus.com';
				$mail->Body 		= 'Dear Mitra OnlinePlus
'.strtoupper($dtNama).'

Berikut informasi account validasi.
ID 			: '.$sList[5].'
Password 	: '.$sList[7].'
Gunakan saat melakukan verifikasi level 2. Setelah Login. Terimakasih.

Best & Regards,
https://www.klikonlineplus.com

PT. INDOTAMA PALAPA NUSANTARA
									';
			}elseif( $cmd=="sendEmail_InfoValidasiTerminal" ){
				$mail->Subject 		= 'Informasi Tambah Terminal KlikOnlinePlus.com';
				$mail->Body 		= 'Dear Mitra OnlinePlus
'.strtoupper($dtNama).'

Klik link dibawah ini untuk validasi tambah terminal.
https://www.klikonlineplus.com/v2.0/app/validasi/?tp=tt&nToken='.$dtToken.'
Terimakasih

Best & Regards,
https://www.klikonlineplus.com

PT. INDOTAMA PALAPA NUSANTARA
									';
			}elseif( $cmd=="sendEmail_InfoGantiPassword" ){
				$mail->Subject 		= 'Informasi Ganti Password KlikOnlinePlus.com';
				$mail->Body 		= 'Dear Mitra OnlinePlus
'.strtoupper($dtNama).'

Klik link dibawah ini untuk mengganti password anda.
https://www.klikonlineplus.com/v2.0/app/gantipassword/?tp=tt&nToken='.$dtToken.'
Terimakasih

Best & Regards,
https://www.klikonlineplus.com

PT. INDOTAMA PALAPA NUSANTARA
									';
			}
			
			

			$mail->addAddress($toClient);
			
			
			if(!$mail->Send()) {
				$error = 'Mail error: '.$mail->ErrorInfo; 
				return false;
			} else {
				$error = 'Message sent!';
				return true;
			}
			
		}

		public function sendEmail_Token($dtEmail, $dtNama, $dtToken){
			$this->SMTPMailer("sendEmail_Token", $dtEmail, $dtNama, $dtToken);
		}

		public function sendEmail_ValidasiDaftar($dtEmail, $dtNama, $dtToken){
			$this->SMTPMailer("sendEmail_ValidasiDaftar", $dtEmail, $dtNama, $dtToken);
		}

		public function sendEmail_InfoValidasi($dtEmail, $dtNama, $dtToken){
			$this->SMTPMailer("sendEmail_InfoValidasi", $dtEmail, $dtNama, $dtToken);
		}

		public function sendEmail_InfoValidasiTerminal($dtEmail, $dtNama, $dtToken){
			$this->SMTPMailer("sendEmail_InfoValidasiTerminal", $dtEmail, $dtNama, $dtToken);
		}

		public function sendEmail_InfoGantiPassword($dtEmail, $dtNama, $dtToken){
			$this->SMTPMailer("sendEmail_InfoGantiPassword", $dtEmail, $dtNama, $dtToken);
		}

	}


