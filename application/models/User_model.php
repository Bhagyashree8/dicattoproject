<?php 

  /**
   * 
   */
  class User_model extends CI_model
  {
  	
  	/**********function for upload file**************/
  	function move_image(array $image, $path=null, $file_input_name)
    {
  		$configUpload['upload_path']    = 'assets/'. $path;                 
  		$configUpload['allowed_types']  = '*';       
  		$configUpload['max_size']       = '0';                          
  		$configUpload['max_width']      = '*';                          
  		$configUpload['max_height']     = '*';                          
  		$configUpload['encrypt_name']   = true;                         
  		$this->load->library('upload',$configUpload); 

  		if($this->upload->do_upload($file_input_name)){  

  			$uploadedDetails    = $this->upload->data();  
  			$path =  $configUpload['upload_path'].$uploadedDetails["file_name"];

  		} else { $path = NULL; }

  		return  $path;
    }

    // function to insert data in users table

	public function insert($input)
	{
		$this->load->dbforge();

		return $this->db->insert('users',$input);
	}

	/********** function to get record by id ***********/
	public function getUserById($id)
	{
		$this->db
  		  ->select('*')
  		  ->where('user_id',$id)
  		  ->from('users');

  		$query = $this->db->get();

  		return $query->row();
	}


	/*
   * get rows from the users table
   */
    public function getRows($params = array()){

      // $this->db->select('*');
      // $this->db->from('users');
      
      // //fetch data by conditions
      // if(array_key_exists("conditions",$params)){
      //     foreach ($params['conditions'] as $key => $value) {
      //         $this->db->where($key,$value);
      //     }
      // }
      
      // if(array_key_exists("id",$params)){
      //     $this->db->where('id',$params['id']);
      //     $query = $this->db->get();
      //     $result = $query->row_array();
      // }else{
      //     //set start and limit
      //     if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
      //         $this->db->limit($params['limit'],$params['start']);
      //     }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
      //         $this->db->limit($params['limit']);
      //     }
      //     $query = $this->db->get();
      //     if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
      //         $result = $query->num_rows();
      //     }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
      //         $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
      //     }else{
      //         $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
      //     }
      // }

      // //return fetched data
      // return $result;

        $this->db->select("*")
	 	->where("email", $params["conditions"]["email"])
	 	->where("password", $params["conditions"]["password"])
	 	->from("users");

	 	$query = $this->db->get();

	 	$result = $query->row();

	 	return $result;
  }

  /*************** function to get all vendors (users) ************/
    public function getVendors()
    {
        $this->db->select("*")
        ->where("role_id", 2)
        ->order_by("user_id","DESC")
        ->from("users");

        $query = $this->db->get();

        $result = $query->result();

        return $result;
    }

    /************** function to delete vendor ****************/
    public function delete($id)
    {
        $this->db->where('user_id', $id);

        return $this->db->delete('users');
    }

    /************* function to update vendor ***********************/
    public function update($user_id, $input)
    {
      $this->db->where('user_id',$user_id);
      return $this->db->update('users',$input);
    }

  }
?>