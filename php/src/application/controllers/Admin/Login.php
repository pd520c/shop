<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
	function Login()
	{
		parent::__construct();
		$this->load->model('admin');
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
		redirect('admin/login');
	}


	public function index()
	{
		$this->load->view('admin/Login');
	}

	public function auth()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$query= $this->admin->isadmin($username,$password);
		//print_r($query);
			if ($query) 
			{
					$newdata = array(
                   				'username'  => $query['username'],
                   				'logged_in' => TRUE
               				);
        			$this->session->set_userdata($newdata);
        			redirect('/admin/admin');
			} 
			else 
			{
				echo 'password error';
			}
		
	}

	public function adduser()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$data = array( 'username' => $username, 'password' => $password );
		$this->admin->addadmin($data);
		redirect('admin/login');
	}
}