<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
	function Login(){
		parent::__construct();
		//$this->load->model('common');
	    $this->load->helper('url');
	    $this->load->library('session');
	}


	public function index()
	{
		echo "jass";
	}
}