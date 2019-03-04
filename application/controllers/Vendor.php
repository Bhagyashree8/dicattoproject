<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Kolkata');

class Vendor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('User_model');
		$this->load->library('form_validation');
		 $this->load->helper('file');
	}

	//view form
	public function vendorForm()
	{
		$this->load->view('vendor_register');
		// $this->load->view('vendor_register');
	}

	// function to store data of vendors 
	public function registerVendors()
	{
		if(!isset($_SESSION["loggedUser"])) {
			$logUser = $this->User_model->getUserById(2);
		}
		$loggedUser = isset($_SESSION["loggedUser"]) ? $_SESSION["loggedUser"] : $logUser;

		$this->form_validation->set_rules(
			'owner_name', 'Owner Name',
			'required',
			array(
				'required' => 'Owner Name is required',
			)
		);

		$this->form_validation->set_rules(
			'firm_name', 'Firm Name',
			'required',
			array(
				'required' => 'Firm Name is required',
			)
		);
		$this->form_validation->set_rules(
			'contact', 'Name',
			'required|regex_match[/^[0-9]{10}$/]',
			array(
				'required' => 'Contact number is required',
				'regex_match' => "Contact Number should be 10 digits"
			)
		);
		$this->form_validation->set_rules(
			'email', 'Email',
			'required|is_unique[users.email]',
			array(
				'required' => 'Email is required',
				'is_unique' => "Email id should be unique"
			)
		);


		if($_FILES["uid_card"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["uid_card"], "uid_card");
		}

		if($_FILES["pan_card"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["pan_card"], "pan_card");
		}

		if($_FILES["firm_pan_card"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["firm_pan_card"], "firm_pan_card");
		}

		if($_FILES["gst_card"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["gst_card"], "gst_card");
		}

		if($_FILES["canceled_cheque"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["canceled_cheque"], "canceled_cheque");
		}

		if($_FILES["uploaded_picture"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["uploaded_picture"], "uploaded_picture");
		}

		if($_FILES["firm_address"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["firm_address"], "firm_address");
		}

		if(isset($result)) {

			if($result == FALSE) {

				$this->session->set_flashdata("error", "Documents should be in JPEG/PNG/GIF format");

				if($_SESSION["loggedUser"]->role_id == 1) {

					$this->load->view('Admin/addvendor');
				} else {
					$this->load->view('register');
				}
			}
		}
		// if(isset($_FILES["uid_card"]["tmp_name"]) ) { 
		// 	$this->form_validation->set_rules('uid_card', 'Adhar Card', 'callback_file_check');
		// }

		// if(isset($_FILES["pan_card"]["tmp_name"]) ) { 
		// 	$this->form_validation->set_rules('pan_card', 'PAN Card', 'callback_file_check');
		// }

		// if(isset($_FILES["firm_pan_card"]["tmp_name"]) ) { 
		// 	$this->form_validation->set_rules('firm_pan_card', 'Firm PAN Card', 'callback_file_check');
		// }

		// if(isset($_FILES["gst_card"]["tmp_name"]) ) {
		// 	$this->form_validation->set_rules('gst_card', 'GST Document', 'callback_file_check');
		// }

		// if(isset($_FILES["canceled_cheque"]["tmp_name"]) ) { 
		// 	$this->form_validation->set_rules('canceled_cheque', 'Canceled Cheque', 'callback_file_check');
		// }

		// if(isset($_FILES["uploaded_picture"]["tmp_name"]) ) { 
		// 	$this->form_validation->set_rules('uploaded_picture', 'Picture', 'callback_file_check');
		// }

		// exit();
		if ($this->form_validation->run() == FALSE) {

			if($loggedUser->role_id == 1) {
				$this->load->view('Admin/addvendor');
			} else {
				$this->load->view('register');
			}

			// $this->load->view('Admin/addvendor');

		} else {

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

			$password = mt_rand(10000,99999999);

			$userData = [
				"name" => $_POST["owner_name"] ?? null,
				"owner_name" => $_POST["owner_name"] ?? null,
				"firm_name" => $_POST["firm_name"] ?? null,
				"email" => $_POST["email"] ?? null,
				"password" => md5($password),
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
				"password_string" => $password,
				"created_by" => $loggedUser->user_id,
				"updated_by" => $loggedUser->user_id,
				"created_at" =>date('Y-m-d H:i:s', time()), 
				"updated_at" =>date('Y-m-d H:i:s', time()), 
			];
				
			$isInserted = $this->User_model->insert($userData);

			if($isInserted) {

				$this->session->set_flashdata("success", "Vender added successfully");

			} else {

				$this->session->set_flashdata("error", "Sorry!! Vender not added");
			}

			if(isset($_SESSION["loggedUser"])) {
				redirect('Admin/addvendor', 'refresh');
			} else {
				redirect('Admin/register', 'refresh');
			}
		}
		
	}


	//function to update vender
	public function updateVendor()
	{
		$loggedUser = $_SESSION["loggedUser"];

		$userId = $_POST["user_id"];

		$data["vendor"] = $this->User_model->getUserById($userId);

		$this->form_validation->set_rules(
			'owner_name', 'Owner Name',
			'required',
			array(
				'required' => 'Owner Name is required',
			)
		);

		$this->form_validation->set_rules(
			'firm_name', 'Firm Name',
			'required',
			array(
				'required' => 'Firm Name is required',
			)
		);
		$this->form_validation->set_rules(
			'contact', 'Name',
			'required|regex_match[/^[0-9]{10}$/]',
			array(
				'required' => 'Contact number is required',
				'regex_match' => "Contact Number should be 10 digits and in number format"
			)
		);
		$this->form_validation->set_rules(
			'email', 'Email',
			'required',
			array(
				'required' => 'Email is required',
				// 'is_unique' => "Email id should be unique"
			)
		);

		if($_FILES["uid_card"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["uid_card"], "uid_card");
		}

		if($_FILES["pan_card"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["pan_card"], "pan_card");
		}

		if($_FILES["firm_pan_card"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["firm_pan_card"], "firm_pan_card");
		}

		if($_FILES["gst_card"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["gst_card"], "gst_card");
		}

		if($_FILES["canceled_cheque"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["canceled_cheque"], "canceled_cheque");
		}

		if($_FILES["uploaded_picture"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["uploaded_picture"], "uploaded_picture");
		}

		if($_FILES["firm_address"]["tmp_name"] != "") {
			$result = $this->file_check($_FILES["firm_address"], "firm_address");
		}

		// var_dump($result, $this->form_validation->run()); exit();

		if(isset($result) && $result == FALSE) {
			$this->session->set_flashdata("error", "Documents should be in JPEG/PNG/GIF format");
			redirect($_SERVER['HTTP_REFERER']);
		}

		if($this->form_validation->run() == FALSE) {

			if($loggedUser->role_id == 1) {

				$this->load->view('Admin/viewvendor',$data);
			} 
			else {
				$this->load->view('register');
			}
		}


		// if($this->form_validation->run() == FALSE) {

		// 	if($loggedUser->role_id == 1) {
		// 		$this->load->view('Admin/viewvendor',$data);
		// 	} else {
		// 		$this->load->view('register');
		// 	}

		// } 
		else {				

				if($_FILES["firm_address"]["tmp_name"] != "") {
					$file_input_name = "firm_address";
					$firm_address_img = $this->User_model->move_image($_FILES["firm_address"], 'images/users/',$file_input_name);
				} 

				if($_FILES["uid_card"]["tmp_name"] != "") {
					$file_input_name = "uid_card";
					$uid_path = $this->User_model->move_image($_FILES["uid_card"], 'images/users/',$file_input_name);
				} 
				if($_FILES["pan_card"]["tmp_name"] != "") {
					$file_input_name = "pan_card";
					$pan_path = $this->User_model->move_image($_FILES["pan_card"], 'images/users/',$file_input_name);
				} 
				if($_FILES["firm_pan_card"]["tmp_name"] != "") {
					$file_input_name = "firm_pan_card";
					$firm_pan_path = $this->User_model->move_image($_FILES["firm_pan_card"], 'images/users/',$file_input_name);
				} 
				if($_FILES["gst_card"]["tmp_name"] != "") {
					$file_input_name = "gst_card";
					$gst_path = $this->User_model->move_image($_FILES["gst_card"], 'images/users/',$file_input_name);
				} 

				if($_FILES["canceled_cheque"]["tmp_name"] != "") {
					$file_input_name = "canceled_cheque";
					$canceled_cheque_path = $this->User_model->move_image($_FILES["canceled_cheque"], 'images/users/',$file_input_name);
				} 

				if($_FILES["uploaded_picture"]["tmp_name"] != "") {
					$file_input_name = "uploaded_picture";
					$picture_path = $this->User_model->move_image($_FILES["uploaded_picture"], 'images/users/',$file_input_name);
				} 

				$user = $this->User_model->getUserById($userId);

				$userData = [
					"name" => $_POST["owner_name"] ?? null,
					"owner_name" => $_POST["owner_name"] ?? null,
					"firm_name" => $_POST["firm_name"] ?? null,
					"email" => $_POST["email"] ?? null,
					"mobile" => $_POST["contact"] ?? null,
					"location" => $_POST["location"] ?? null,
					"firm_address" => $_POST["firm_address"] ?? null,
					"firm_address_img" => isset($firm_address_img) ?  $firm_address_img: $user->firm_address_img,
					"uid_card" => isset($uid_path) ?  $uid_path: $user->uid_card,
					"uploaded_picture" => isset($picture_path) ? $picture_path  : $user->uploaded_picture,
					"pan_card" => isset($pan_path) ? $pan_path : $user->pan_card,
					"firm_pan_card" => isset($firm_pan_path) ? $firm_pan_path : $user->firm_pan_card,
					"gst_card" => isset($gst_path) ?  $gst_path : $user->gst_card,
					"canceled_cheque" => isset($canceled_cheque_path) ?  : $user->canceled_cheque ,
					"terms_conditions" => $_POST["terms_conditions"] ?? null,
					"updated_by" => $loggedUser->user_id,
					"updated_at" =>date('Y-m-d H:i:s', time()), 
				];

				$isUpdated = $this->User_model->update($userId, $userData);

				if($isUpdated) {
					$this->session->set_flashdata("success","Vendor Updated successfully");
				} else {
					$this->session->set_flashdata("error","Vendor not updated");
				}

				redirect('Admin/vendors', 'refresh');
		}

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


	/*
     * file value and type check during validation
     */
    public function file_check($str, $file_index_name){

        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/pjpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES[$file_index_name]['name']);
        if(isset($_FILES[$file_index_name]['name']) && $_FILES[$file_index_name]['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
            	return false;
            }
        }else{
        	return false;
        }
    }
}