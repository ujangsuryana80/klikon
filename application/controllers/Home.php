<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function login(){
		echo $this->input->post('mb_Email');
		echo "<br>";
		echo $this->input->post('mb_Password');
	}
}