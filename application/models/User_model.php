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
  		return $this->db->insert('users',$input);
  	}
}
?>