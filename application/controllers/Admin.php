<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/********** function construct ***********/
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('form_validation');
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
	
	public function viewvendor($vendor_id)
	{
		$data["vendor"] = $this->User_model->getUserById($vendor_id);

		$this->load->view('Admin/viewvendor',$data);
		// $this->load->view('vendor_register');
	}
	public function register()
	{

		$this->load->view('register');
		// $this->load->view('vendor_register');
	}

	
	
	
}
