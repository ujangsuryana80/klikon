<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//echo '$C;[PanjangData/ Jika Bukan EDC abaikan];ERROR PAYMENT [1];Pembayaran Atas;Transaksi Invoice;[NoInvoice];GAGAL;SALDO TDK CUKUP;*';
		//echo '$D;3;PLN;Nama :;KANG EMEN;No Tagihan :;211111125400;Tagihan Rp :;425970;ADM Rp :;6400;Total :;432370;Nomor Invoice :;INV121023661602;Tarif/Daya :; R1/900 VA;BL/TH :;0511,0611,0711,0811;Stand Meter :;02362500-02420000;Rp Subsidi :;0;Total Lembar Tagihan : 5 Bulan;201105#123620#1600|201106#116840#1600|201107#102510#1600|201108#83000#1600; ;Tekan :;[OK] Untuk Bayar;[BACK] Kembali;*';
		echo '$I;3;ID Trx :;1569;Tanggal;2016/08/25-11:40:10;Trx;SN5-085294970577;Harga :;Rp. 6175;Saldo Awal :;Rp. 500000.00;Saldo Akhir :;Rp. 493825; ;5 Menit Blm Masuk;Harap Komplain; ;Tekan :;[OK] Cetak Struk;[BACK] Kembali;*';
		//echo '$C;1;NOMOR TUJUAN;085294970577;GAGAL;Max 1x dalam 1 Hari; ;SALDO :;Rp. 500000.00;*';
	}

	public function pulsaInternterGame()
	{
		echo '$I;3;ID Trx :;1569;Tanggal;2016/08/25-11:40:10;Trx;SN5-085294970577;Harga :;Rp. 6175;Saldo Awal :;Rp. 500000.00;Saldo Akhir :;Rp. 493825; ;5 Menit Blm Masuk;Harap Komplain; ;Tekan :;[OK] Cetak Struk;[BACK] Kembali;*';
		//echo '$C;1;NOMOR TUJUAN;085294970577;GAGAL;Max 1x dalam 1 Hari; ;SALDO :;Rp. 500000.00;*';
	}

	public function telkom1()
	{
		echo '$D;3;TELKOM;Nama :;Test telkom 210 ;No Tagihan :;02175910049;Tagihan Rp :;517000;ADM Rp :;2500;Total
:;519500;Nomor Invoice :;INV121023170417;JUL 2011, JUN 2011, MEI 2011;Tekan :;[OK] Untuk Bayar;[BACK] Kembali;*';	

	}

	public function telkom2()
	{
		// VERSI 1
		//echo '$3;TELKOM;02175910049;Test telkom 210;20121023180340; 517.000,00; 2.500,00;E81E23AE26E4F0BF1C3B35D75F43AD36; 519.500,00;-;INV121023170417;JUL 2011- 110.000,00#JUN 2011- 205.000,00#MEI 2011- 202.000,00#; REF;NAMA_BANK ;*';

		// VERSI 2
		//echo '$3;TELKOM;021678969001;PTCakarBuana;20121023180340;168916;9000;33903277E9F3BB9C2EE9DFC0F1B47550;177916;-;INV140310887898;001001;123456789012345;7304EB49A0684F51ACAE7480C725C691;JAN 2013- 32.859,00#FEB 2013- 62.859,00#MAR 2013- 82.198,00#;SWITCHER;-;*';

		echo '$C;[PanjangData/ Jika Bukan EDC abaikan];ERROR PAYMENT [3];Pembayaran Atas;Transaksi Invoice;[NoInvoice];GAGAL;NoInvoice tidak ada.;*';
	}

	public function AdviceTelkom2()
	{
		// STRUK PLN POSTPAID
		echo '$1;211111125400;KANG EMEN;R1/900 VA; 425.970,00; 6.400,00;0511,0611,0711,0811;985D211C7B6E6AB6CC20A82572E13E2F;02362500-02420000;0,00; 432.370,00;1;-;Rincian Tagihan Dapat Diakses di www.pln.co.id Informasi Hub. Call Center 123 atau PLN Terdekat;INV121023661602; REF;NAMA_BANK ;*';

		// STRUK PLN NON TAGLIST
		//echo '$8;5200312002922;28SEP11;MAKERI KUSUMA; 381.210,00; 1.600,00;-;F296D0AEB3B5C2B8A698; 382.810,00;PENYAMBUNGAN BARU;123 ;"Info lebih lanjut silahkan akses www.pln.co.id atau Kantor PLN Terdekat";INV121016986605; REF;NAMA_BANK ;*';

		// STRUK PLN PREPAID
		//echo '$2;14444444449!124444444444;VIAN SETIAWAN.SH;DK /7700 VA;6A6A23752F8B5A85DC4D5FC5CC1879E5;5183 3298 9437 8167 2585; 30.000,00; 1.600,00; 2.184,62; 1.456,41; 3.094,87; 2.708,01; 18.956,09;981.40; 1.600,00; 30.000,00;123 ;Informasi Hubungi Call Center 123 Atau Hub PLN Terdekat :;INV121023725855; REF;NAMA_BANK ;*';

		//echo '$C;[PanjangData/ Jika Bukan EDC abaikan];ERROR PAYMENT [3];Pembayaran Atas;Transaksi Invoice;[NoInvoice];GAGAL;NoInvoice tidak ada.;*';
	}

	public function pln1()
	{
		// STRUK PLN POSTPAID
		echo '$D;3;PLN;Nama :;KANG EMEN;No Tagihan :;211111125400;Tagihan Rp :;425970;ADM Rp :;6400;Total :;432370;Nomor Invoice :;INV121023661602;Tarif/Daya :; R1/900 VA;BL/TH :;0511,0611,0711,0811;Stand Meter :;02362500-02420000;Rp Subsidi :;0;Total Lembar Tagihan : 5 Bulan;201105#123620#1600|201106#116840#1600|201107#102510#1600|201108#83000#1600; ;Tekan :;[OK] Untuk Bayar;[BACK] Kembali;*';

		// STRUK PLN NON TAGLIST
		//echo '$D;3;PLNNONTAGLIST;Nama :;MAKERI KUSUMA;No Registrasi :;5200312002922;Tagihan Rp :;381210.00;ADM Rp :;1600;Total :;382810;Nomor Invoice :;INV121016986605;Transaksi:;PENYAMBUNGAN BARU ;No Reg:;5200312002922;Tgl Reg:;28SEP11;ID Pel:; ; ;Tekan :;[OK] Untuk Bayar;[BACK] Kembali;*';

		// STRUK PLN PREPAID
		//echo '$D;3;PLNPREPAID;Nama :;VIAN SETIAWAN.SH;No Tagihan :;14444444449;Rp Beli :;30000;Rp Admin :;0;Rp Bayar :;30000;Nomor Invoice :;INV121023725855;Id Pel :;124444444444;Tarif/Daya :;DK /7700 VA;JenisToken :; Token Baru;Token Unsold :;2;336022, 57267; ;Tekan :;[OK] Untuk Bayar;[BACK] Kembali;*';
		

	}

	public function leasing1()
	{
		// LEASING ADIRA
		//echo '$C;3;ADIRA;Nama :;ASMAINI;No Tagihan :;010410120406;Tagihan Rp :;559000;ADM Rp :;3000;Total :;562000;Nomor Invoice :;INV;No Pol :;B6856KYN;Angsuran Ke :;24;Jatuh Tempo :;04 NOV 12; ;Tekan :;[OK] Untuk Bayar;[BACK] Kembali;*';

		// LEASING NONADIRA
		echo '$D;3;BAF;Nama :;DUMMY-173 ;No Tagihan :;000000000173;Tagihan Rp :;2871000;ADM Rp :;0;Total :;2871000;Nomor Invoice :;INV150304680118;No Pol :;B173P ;Angsuran Ke :;015;Jatuh Tempo :;28-02-2015;Min Pay Amount:;151000;Max Pay Amount:;8161000; ;Tekan :;[OK] Untuk Bayar;[BACK] Kembali;*';
	}

	public function pulsaPascabayar1()
	{
		
		echo '$D;3;HALO;Nama:;SUPARNOMITRO,SP;NoTagihan:;081300000001;Tagihan Rp:;38500;ADM Rp:;2500;Total:;41000;Nomor Invoice:;INV150820197633;TELKOMSEL;Tekan:;[OK]UntukBayar;[BACK]Kembali;*';

	}

	public function tv1()
	{
		echo '$D;3;(INDOVISION/TOPTV/OKEVISION);Nama :;LUKMAN HAKIM ;No Tagihan :;0127225115199;Tagihan Rp :;60500;ADM Rp :;3000;Total :;63500;Nomor Invoice :;INV130409171116;Tekan :;[OK] Untuk Bayar;[BACK] Kembali;*';

		// STRUK PLN NON TAGLIST
		//echo '$D;3;PLNNONTAGLIST;Nama :;MAKERI KUSUMA;No Registrasi :;5200312002922;Tagihan Rp :;381210.00;ADM Rp :;1600;Total :;382810;Nomor Invoice :;INV121016986605;Transaksi:;PENYAMBUNGAN BARU ;No Reg:;5200312002922;Tgl Reg:;28SEP11;ID Pel:; ; ;Tekan :;[OK] Untuk Bayar;[BACK] Kembali;*';

		// STRUK PLN PREPAID
		//echo '$D;3;PLNPREPAID;Nama :;VIAN SETIAWAN.SH;No Tagihan :;14444444449;Rp Beli :;30000;Rp Admin :;0;Rp Bayar :;30000;Nomor Invoice :;INV121023725855;Id Pel :;124444444444;Tarif/Daya :;DK /7700 VA;JenisToken :; Token Baru;Token Unsold :;2;336022, 57267; ;Tekan :;[OK] Untuk Bayar;[BACK] Kembali;*';
		

	}

	public function tv2()
	{
		
		echo '$4;(INDOVISION/TOPTV/OKEVISION);0127225115199;LUKMAN HAKIM ;10/11/2012-10/12/2012;60500;3000;63500;04/04/2013 / 04:16:31;00024200; (INDOVISION/TOPTV/OKEVISION) MENYATAKAN STRUK INI SEBAGAI BUKTI PEMBAYARAN YANG SAH, MOHON DISIMPAN Terima kasih;FM REF;-;**';

		//echo '$C;[PanjangData/ Jika Bukan EDC abaikan];ERROR PAYMENT [3];Pembayaran Atas;Transaksi Invoice;[NoInvoice];GAGAL;NoInvoice tidak ada.;*';
	}

	public function pln2()
	{
		// STRUK PLN POSTPAID
		//echo '$1;211111125400;KANG EMEN;R1/900 VA; 425.970,00; 6.400,00;0511,0611,0711,0811;985D211C7B6E6AB6CC20A82572E13E2F;02362500-02420000;0,00; 432.370,00;1;-;Rincian Tagihan Dapat Diakses di www.pln.co.id Informasi Hub. Call Center 123 atau PLN Terdekat;INV121023661602; REF;NAMA_BANK ;*';

		// STRUK PLN NON TAGLIST
		echo '$8;5200312002922;28SEP11;MAKERI KUSUMA; 381.210,00; 1.600,00;-;F296D0AEB3B5C2B8A698; 382.810,00;PENYAMBUNGAN BARU;123 ;"Info lebih lanjut silahkan akses www.pln.co.id atau Kantor PLN Terdekat";INV121016986605; REF;NAMA_BANK ;*';

		// STRUK PLN PREPAID
		//echo '$2;14444444449!124444444444;VIAN SETIAWAN.SH;DK /7700 VA;6A6A23752F8B5A85DC4D5FC5CC1879E5;5183 3298 9437 8167 2585; 30.000,00; 1.600,00; 2.184,62; 1.456,41; 3.094,87; 2.708,01; 18.956,09;981.40; 1.600,00; 30.000,00;123 ;Informasi Hubungi Call Center 123 Atau Hub PLN Terdekat :;INV121023725855; REF;NAMA_BANK ;*';

		//echo '$C;[PanjangData/ Jika Bukan EDC abaikan];ERROR PAYMENT [3];Pembayaran Atas;Transaksi Invoice;[NoInvoice];GAGAL;NoInvoice tidak ada.;*';
	}

	public function leasing2()
	{
		
		//echo '$7;ADIRA;010711132234;KHAFID MAULANA;B6948ERD;12;20OCT12;335000.00;3000.00;338000.00;8245466170; NO. PENGESAHAN;NAMA_BANK ;*';
		//echo '$7;BAF; 000000000173;DUMMY-173 ;B173P ;1;28-02-2015; 2871000; 0; 2871000;0B7A14DBF1F44D38BD4 ;04-03-2015;000 ; ;Chevrolet ;050;000000000000;000000150000;000000001000;000002720000;00000000000000000000000000000000;015;000002871000;DUMMY FILLER ON DUTY;INV150304680118;000000000000;Bussan Auto Finance ;2871000;GSP REF;BANK XYZ;*';

		echo '$C;[PanjangData/ Jika Bukan EDC abaikan];ERROR PAYMENT [3];Pembayaran Atas;Transaksi Invoice;[NoInvoice];GAGAL;NoInvoice tidak ada.;*';
	}

	public function pulsapascabayar2()
	{
		
		//echo '$7;HALO;08112220567;SUPARNO MITRO,SP;20-­‐08-­‐201516:05:28;38500;2500;INV150820197633;366141786;41000;TELKOMSEL MENYATAKAN STRUK INI SEBAGAI BUKTI PEMBAYARAN YANG SAH;INV150820197633;REF;-­‐;*';
		echo '$C;[PanjangData/ Jika Bukan EDC abaikan];ERROR PAYMENT [3];Pembayaran Atas;Transaksi Invoice;[NoInvoice];GAGAL;NoInvoice tidak ada.;*';
	}

	public function AdvicePulsaPascabayar2()
	{
		echo '$7;HALO;08112220567;SUPARNO MITRO,SP;20-­‐08-­‐201516:05:28;38500;2500;INV150820197633;366141786;41000;TELKOMSEL MENYATAKAN STRUK INI SEBAGAI BUKTI PEMBAYARAN YANG SAH;INV150820197633;REF;-­‐;*';
	}

	public function AdvicePln2()
	{
		// STRUK PLN POSTPAID
		echo '$1;211111125400;KANG EMEN;R1/900 VA; 425.970,00; 6.400,00;0511,0611,0711,0811;985D211C7B6E6AB6CC20A82572E13E2F;02362500-02420000;0,00; 432.370,00;1;-;Rincian Tagihan Dapat Diakses di www.pln.co.id Informasi Hub. Call Center 123 atau PLN Terdekat;INV121023661602; REF;NAMA_BANK ;*';

		// STRUK PLN NON TAGLIST
		//echo '$8;5200312002922;28SEP11;MAKERI KUSUMA; 381.210,00; 1.600,00;-;F296D0AEB3B5C2B8A698; 382.810,00;PENYAMBUNGAN BARU;123 ;"Info lebih lanjut silahkan akses www.pln.co.id atau Kantor PLN Terdekat";INV121016986605; REF;NAMA_BANK ;*';

		// STRUK PLN PREPAID
		//echo '$2;14444444449!124444444444;VIAN SETIAWAN.SH;DK /7700 VA;6A6A23752F8B5A85DC4D5FC5CC1879E5;5183 3298 9437 8167 2585; 30.000,00; 1.600,00; 2.184,62; 1.456,41; 3.094,87; 2.708,01; 18.956,09;981.40; 1.600,00; 30.000,00;123 ;Informasi Hubungi Call Center 123 Atau Hub PLN Terdekat :;INV121023725855; REF;NAMA_BANK ;*';

		//echo '$C;[PanjangData/ Jika Bukan EDC abaikan];ERROR PAYMENT [3];Pembayaran Atas;Transaksi Invoice;[NoInvoice];GAGAL;NoInvoice tidak ada.;*';
	}

	public function AdviceLeasing2()
	{
		
		echo '$7;BAF; 000000000173;DUMMY-173 ;B173P ;1;28-02-2015; 2871000; 0; 2871000;0B7A14DBF1F44D38BD4 ;04-03-2015;000 ; ;Chevrolet ;050;000000000000;000000150000;000000001000;000002720000;00000000000000000000000000000000;015;000002871000;DUMMY FILLER ON DUTY;INV150304680118;000000000000;Bussan Auto Finance ;2871000;GSP REF;BANK XYZ;*';

	}

	public function Advicetv2()
	{
		echo '$4;(INDOVISION/TOPTV/OKEVISION);0127225115199;LUKMAN HAKIM ;10/11/2012-10/12/2012;60500;3000;63500;04/04/2013 / 04:16:31;00024200; (INDOVISION/TOPTV/OKEVISION) MENYATAKAN STRUK INI SEBAGAI BUKTI PEMBAYARAN YANG SAH, MOHON DISIMPAN Terima kasih;FM REF;-;**';
	}
	

	public function bpjs()
	{
		echo '$D;3;BPJSKS;Nama :;NANAN SUPRIATNA;No Registrasi :;0001260826828;Tagihan Rp :;25500;ADM Rp :;2500;Total :;28000;Nomor Invoice :;INV151119485028;Transaksi:;BPJS Kesehatan; ;Tekan :;[OK] Untuk Bayar;[BACK] Kembali;*';
	}

	public function pdam()
	{
		echo '$D;3;PDAM;Nama :;DRS VIAN LUMANAUW ;No Tagihan :;000045754;Tagihan Rp :;400000;ADM Rp :;0;Total
:;400000;Nomor Invoice :;INV121023720293;Tekan :;[OK] Untuk Bayar;[BACK] Kembali;*';
	}

	public function register()
	{
		echo '[ 13:02:34 ] - $R;Yth.;Tiknar;Aktivasi Berhasil;UserId;IPN160921473754;Password;0f6c89;Saldo;0;Tipe;REGULER;AKTIF;*';
	}

	public function advice()
	{
		
	}
}
