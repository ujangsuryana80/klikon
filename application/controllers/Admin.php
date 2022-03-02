<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        // checkAuth();
    }


	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/script');
	}	

	function load_html($id) {
        $file_exist = true;
        $id = str_replace('.php','',$id);
        $file = explode(".", $id);
        $url_file = "";
        if(count($file) > 1) {
            if(strtolower(substr($file[1],-4)) != ".php")
                $file[1] .= ".php";
            if(file_exists(APPPATH."views/".$file[0].'/'.$file[1])) {
                $this->load->view($file[0].'/'.$file[1]);
            }else {
                $file_exist = false;
            }

            $url_file = APPPATH."views/".$file[0].'/'.$file[1];
        }else {
            if(strtolower(substr($id,-4)) != ".php")
                $id .= ".php";

            if(file_exists(APPPATH."views/".$id)) {
                $this->load->view($id);
            }else {
                $file_exist = false;
            }

            $url_file = APPPATH."views/".$id;
        }

        if(!$file_exist) {
            $this->load->view("error_404.php");
        }
    }
}