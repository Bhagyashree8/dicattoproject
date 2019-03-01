<?php
	
	/**
	 * 
	 */
	class Login extends AnotherClass
	{
		
		function __construct(argument)
		{
			# code...
		}

	    /*
	     * User login
	     */
	    public function login(){
	        $data = array();
	        if($this->session->userdata('success_msg')){
	            $data['success_msg'] = $this->session->userdata('success_msg');
	            $this->session->unset_userdata('success_msg');
	        }
	        if($this->session->userdata('error_msg')){
	            $data['error_msg'] = $this->session->userdata('error_msg');
	            $this->session->unset_userdata('error_msg');
	        }
	        if($this->input->post('loginSubmit')){
	            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	            $this->form_validation->set_rules('password', 'password', 'required');
	            if ($this->form_validation->run() == true) {
	                $con['returnType'] = 'single';
	                $con['conditions'] = array(
	                    'email'=>$this->input->post('email'),
	                    'password' => md5($this->input->post('password')),
	                    'status' => '1'
	                );
	                $checkLogin = $this->user->getRows($con);
	                if($checkLogin){
	                    $this->session->set_userdata('isUserLoggedIn',TRUE);
	                    $this->session->set_userdata('userId',$checkLogin['id']);
	                    redirect('users/account/');
	                }else{
	                    $data['error_msg'] = 'Wrong email or password, please try again.';
	                }
	            }
	        }
	        //load the view
	        $this->load->view('users/login', $data);
	    }


	/*
     * User logout
    */
	    public function logout(){
	        $this->session->unset_userdata('isUserLoggedIn');
	        $this->session->unset_userdata('userId');
	        $this->session->sess_destroy();
	        redirect('users/login/');
	    }
	}
?>