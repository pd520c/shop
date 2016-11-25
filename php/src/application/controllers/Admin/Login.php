<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
	function Login()
	{
		parent::__construct();
		//$this->load->model('common');
	    $this->load->helper('url');
	    $this->load->library('session');
	}

	public function islogin()
	{
		$logged = $this->session->userdata('username');
		if ($logged) 
		{
			return TRUE;	
		}
		else
		{
			return FLASE;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect('/login');
	}


	public function index()
	{
		echo "jass";
	}

	public function auth()
	{
		# code...
	}

	public function adduser()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$data = array( 'username' => $username, 'password' => $password );
		$this->common->add('user',$data);
		redirect('/login');
	}
}