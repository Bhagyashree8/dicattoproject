<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function login()
	{
		$this->load->view('Admin/login');
		// $this->load->view('vendor_register');
	}
	public function vendors()
	{
		$this->load->view('Admin/vendors');
		// $this->load->view('vendor_register');
	}
	public function addvendor()
	{
		$this->load->view('Admin/addvendor');
		// $this->load->view('vendor_register');
	}
	
	
}
