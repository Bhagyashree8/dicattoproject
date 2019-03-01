<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Kolkata');

class Vendor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('User_model');
	}

	//view form
	public function vendorForm()
	{
		// var_dump(3234);exit();
		$this->load->view('vendor_register');
		// $this->load->view('vendor_register');
	}

	// function to store data of vendors 
	public function registerVendors()
	{
		if(isset($_FILES["firm_address"]["tmp_name"]) ) {
			$file_input_name = "firm_address";
			$firm_address_img = $this->User_model->move_image($_FILES["firm_address"], 'images/users/',$file_input_name);
		} 

		if(isset($_FILES["uid_card"]["tmp_name"]) ) {
			$file_input_name = "uid_card";
			$uid_path = $this->User_model->move_image($_FILES["uid_card"], 'images/users/',$file_input_name);
		} 
		if(isset($_FILES["pan_card"]["tmp_name"]) ) {
			$file_input_name = "pan_card";
			$pan_path = $this->User_model->move_image($_FILES["pan_card"], 'images/users/',$file_input_name);
		} 
		if(isset($_FILES["firm_pan_card"]["tmp_name"]) ) {
			$file_input_name = "firm_pan_card";
			$firm_pan_path = $this->User_model->move_image($_FILES["firm_pan_card"], 'images/users/',$file_input_name);
		} 
		if(isset($_FILES["gst_card"]["tmp_name"]) ) {
			$file_input_name = "gst_card";
			$gst_path = $this->User_model->move_image($_FILES["gst_card"], 'images/users/',$file_input_name);
		} 

		if(isset($_FILES["canceled_cheque"]["tmp_name"]) ) {
			$file_input_name = "canceled_cheque";
			$canceled_cheque_path = $this->User_model->move_image($_FILES["canceled_cheque"], 'images/users/',$file_input_name);
		} 

		if(isset($_FILES["uploaded_picture"]["tmp_name"]) ) {
			$file_input_name = "uploaded_picture";
			$picture_path = $this->User_model->move_image($_FILES["uploaded_picture"], 'images/users/',$file_input_name);
		} 

		$userData = [
			"name" => $_POST["owner_name"] ?? null,
			"owner_name" => $_POST["owner_name"] ?? null,
			"firm_name" => $_POST["firm_name"] ?? null,
			"email" => $_POST["email"] ?? null,
			"mobile" => $_POST["contact"] ?? null,
			"location" => $_POST["location"] ?? null,
			"firm_address" => $_POST["firm_address"] ?? null,
			"firm_address_img" => $firm_address_img ?? null,
			"uid_card" => $uid_path ?? null ,
			"uploaded_picture" => $picture_path ?? null,
			"pan_card" => $pan_path ?? null,
			"firm_pan_card" => $firm_pan_path ?? null,
			"gst_card" => $gst_path ?? null,
			"canceled_cheque" => $canceled_cheque_path ?? null ,
			"terms_conditions" => $_POST["terms_conditions"] ?? null,
			"role_id" => 2,
			"created_at" =>date('Y-m-d H:i:s', time()), 
			"updated_at" =>date('Y-m-d H:i:s', time()), 
		];
			
		$isInserted = $this->User_model->insert($userData);

		if($isInserted) {

			$this->session->set_flashdata("success", "Vender added successfully");

		} else {

			$this->session->set_flashdata("error", "Sorry!! Vender not added");
		}

		redirect('Vendor/vendorForm', 'refresh');
	}


	//function to update vender
	public function updateVendor()
	{
		$userId = $_POST["user_id"];


		if(isset($_FILES["uid_card"]["tmp_name"]) ) {
			$file_input_name = "uid_card";
			$uid_path = $this->User_model->move_image($_FILES["uid_card"], 'images/users/',$file_input_name);
		} 
		if(isset($_FILES["pan_card"]["tmp_name"]) ) {
			$file_input_name = "pan_card";
			$pan_path = $this->User_model->move_image($_FILES["pan_card"], 'images/users/',$file_input_name);
		} 
		if(isset($_FILES["firm_pan_card"]["tmp_name"]) ) {
			$file_input_name = "firm_pan_card";
			$firm_pan_path = $this->User_model->move_image($_FILES["firm_pan_card"], 'images/users/',$file_input_name);
		} 
		if(isset($_FILES["gst_card"]["tmp_name"]) ) {
			$file_input_name = "gst_card";
			$gst_path = $this->User_model->move_image($_FILES["gst_card"], 'images/users/',$file_input_name);
		} 

		if(isset($_FILES["canceled_cheque"]["tmp_name"]) ) {
			$file_input_name = "canceled_cheque";
			$canceled_cheque_path = $this->User_model->move_image($_FILES["canceled_cheque"], 'images/users/',$file_input_name);
		} 

		if(isset($_FILES["uploaded_picture"]["tmp_name"]) ) {
			$file_input_name = "uploaded_picture";
			$picture_path = $this->User_model->move_image($_FILES["uploaded_picture"], 'images/users/',$file_input_name);
		} 

		$user = $this->User_model->getUserById();

		$userData = [
			"name" => $_POST["owner_name"] ?? null,
			"owner_name" => $_POST["owner_name"] ?? null,
			"firm_name" => $_POST["firm_name"] ?? null,
			"email" => $_POST["email"] ?? null,
			"mobile" => $_POST["contact"] ?? null,
			"location" => $_POST["location"] ?? null,
			"firm_address" => $_POST["firm_address"] ?? null,
			"uid_card" => isset($uid_path) ?  $uid_path: $user->uid_card,
			"uploaded_picture" => isset($picture_path) ? $picture_path  : $user->uploaded_picture,
			"pan_card" => isset($pan_path) ? $pan_path : $user->pan_card,
			"firm_pan_card" => isset($firm_pan_path) ? $firm_pan_path : $user->firm_pan_card,
			"gst_card" => isset($gst_path) ?  $gst_path : $user->gst_card,
			"canceled_cheque" => isset($canceled_cheque_path) ?  : $user->canceled_cheque ,
			"terms_conditions" => $_POST["terms_conditions"] ?? null,
			"created_at" =>date('Y-m-d H:i:s', time()), 
			"updated_at" =>date('Y-m-d H:i:s', time()), 
		];
	}

	/************************** function to delete vendor ************/
	public function deleteVendor($id)
	{
		$isDeleted = $this->User_model->delete($id);

		if($isDeleted) {
			$this->session->set_flashdata("success","Vendor Deleted successfully");
		} else {
			$this->session->set_flashdata("error","Vendor not deleted");
		}

		redirect('Admin/vendors', 'refresh');
	}
}