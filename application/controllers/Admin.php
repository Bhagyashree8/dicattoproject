<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function login()
	{
		$this->load->view('Admin/login');
		// $this->load->view('vendor_register');
	}
	public function vederliest()
	{
		$this->load->view('Admin/vederliest');
		// $this->load->view('vendor_register');
	}
	
	
}
