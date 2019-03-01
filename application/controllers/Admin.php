<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	/********** function construct ***********/
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('User_model');

	}

	public function login()
	{
		$this->load->view('Admin/login');
		// $this->load->view('vendor_register');
	}
	public function vendors()
	{
		$data["vendors"] = $this->User_model->getVendors();


		$this->load->view('Admin/vendors', $data);
		
		// $this->load->view('vendor_register');
	}
	
	
}
