<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller {


	public function index()
	{
		$this->load->view('login/forgot-password');
	}
}
