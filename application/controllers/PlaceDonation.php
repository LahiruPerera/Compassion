<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlaceDonation extends CI_Controller {

	public function __construct()
  {
    parent::__construct();

    if($this->session->userdata('logged_in'))
    {
      $this->logged_in = true;
    }
    else
    {
      $this->logged_in = false;
    }
  }

	public function index()
	{
		if($this->logged_in)
	    {
			  $this->load->view('PlaceDonationView');
	    }
    	else
	    { 
	      redirect('/login/');
	    }
		
	}
	public function insert_data() 
  {
  	  
     $this->load->model('PlaceDonationModel');
     $this->PlaceDonationModel->donate();
     $data['message'] = 'Data Inserted Successfully';
     $this->load->view('PlaceDonationView');
    
  }
	
	
}




?>


