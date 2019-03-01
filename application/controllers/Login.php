<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Kolkata');

	/**
	 * 
	 */
	class Login extends CI_Controller 
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->model('User_model');
			$this->load->library('form_validation');
		}

	    /*
	     * User login
	     */
	    public function loginPost(){
	        $data = array();
	        if($this->session->userdata('success_msg')){
	            $data['success_msg'] = $this->session->userdata('success_msg');
	            $this->session->unset_userdata('success_msg');
	        }
	        if($this->session->userdata('error_msg')){
	            $data['error_msg'] = $this->session->userdata('error_msg');
	            $this->session->unset_userdata('error_msg');
	        }

	            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	            $this->form_validation->set_rules('password', 'password', 'required');

	            if ($this->form_validation->run() == true) {
	                $con['returnType'] = 'single';
	                $con['conditions'] = array(
	                    'email'=>$this->input->post('email'),
	                    'password' => md5($this->input->post('password')),
	                    'status' => '1'
	                );

	                $checkLogin = $this->User_model->getRows($con);

	                if($checkLogin){
	                    $this->session->set_userdata('isUserLoggedIn',TRUE);
	                    $this->session->set_userdata('loggedUser',$checkLogin);

	                    redirect('Admin/vendors');
	                    
	                }else{
	                    $data['error_msg'] = 'Wrong email or password, please try again.';
	                }
	            }

	        //load the view
	        $this->load->view('Admin/login');
	    }


	/*
     * User logout
    */
	    public function logout(){
	        $this->session->unset_userdata('isUserLoggedIn');
	        $this->session->unset_userdata('loggedUser');
	        $this->session->sess_destroy();
	        
	        //load the view
	        $this->load->view('Admin/login');
	    }
	}
?>