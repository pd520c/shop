<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
	function Admin()
	{
		parent::__construct();
		//$this->load->model('admin');
	    $this->load->helper('url');
	    //$this->load->library('session');
	}

	public function index()
	{
		echo "welcome";
	}
}