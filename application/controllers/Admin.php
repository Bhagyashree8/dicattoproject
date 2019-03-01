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


	//vendors list
	public function vendors()
	{
		$data["vendors"] = $this->User_model->getVendors();

		$this->load->view('Admin/vendors', $data);
	}
	
	public function addvendor()
	{
		$this->load->view('Admin/addvendor');
		// $this->load->view('vendor_register');
	}
	
	
}
