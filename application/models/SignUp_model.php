<?php

Class SignUp_model extends CI_Model
{

	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function register()
    {

    	$email = $this->input->post('email');
    	$sql = "SELECT memberID FROM member WHERE email='$email' LIMIT 1";
    	$result = $this->db->query($sql);
        $row = $result->row();

    	if($result->num_rows() === 1) 
    	{
    		$error = "Sorry there is already a registered member with the given email."; 
    		return $error;
    	}
    	else
    	{
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'contact' => $this->input->post('contact'),
                'district' => $this->input->post('district'),
                'occupation' => $this->input->post('occupation'),
                'password' => md5($this->input->post('password1'))
                );
            
            return $this->db->insert('member', $data);
    	    

    	}
    }

}