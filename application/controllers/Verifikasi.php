<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {


	public function index()
	{
		$tmp['message_error'] = 0;
		$this->load->view('login/verifikasi', $tmp);
	}
}
