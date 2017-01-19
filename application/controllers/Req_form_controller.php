<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Req_form_controller extends CI_Controller {

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
		  $this->load->view('req_form');
    }
    else
    { 
      redirect('/login/');
    }
	}

	public function insert_data() 
  {
  	  
    

    $this->load->library('form_validation');

    $this->form_validation->set_rules('amount','Amount','trim|numeric|required');
    if($this->form_validation->run() == FALSE)
    {
      $errors['errors'] = validation_errors();?>
      <div class="alert alert-warning" role="alert">
        <strong>Warning!</strong> Not a valid amount.
      </div><?php
      $this->load->view('req_form',$errors);
      
    }
    else{
     $this->load->model('req_form_model');
     $this->req_form_model->req_insert();
    
     echo "<script type='text/javascript'>alert('Data submitted successfully!')</script>";
     $this->load->view('req_form');

   }
    
  }
}


