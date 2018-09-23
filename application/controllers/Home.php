<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home_view');
	}

	public function signUp()
	{
		$this->load->view('SignUp_form');
		
	}

	public function get_signup()
	{
		$this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'trim|alpha_numeric_spaces');
        $this->form_validation->set_rules('contact', 'Contact number', 'numeric|min_length[10]');
        $this->form_validation->set_rules('email','Email Address','trim|required|min_length[10]|valid_email');
        $this->form_validation->set_rules('password1','Password','trim|min_length[6]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|matches[password1]');
        $this->form_validation->set_rules('district', 'District', 'trim|alpha');
        $this->form_validation->set_rules('occupation', 'Occupation', 'trim');

        if($this->form_validation->run() == FALSE)
		{
			$data['error'] = validation_errors();
			$this->load->view('SignUp_form',$data);
			
		}

		else
		{
			$this->load->model('SignUp_model');
			$data['error'] =$this->SignUp_model->register();
			if($data['error'] != 1)
			{
				$this->load->view('SignUp_form',$data);
			}
			else
			{
				// echo "<script type='text/javascript'>alert('Successfully registered !')</script>";
				$data['success'] = "Successfully registered !";	
				$this->load->view('SignUp_form',$data);
			}
			
			//redirect('/Home/');
		}

		

	}

	public function Profile()
	{
		$this->load->view('profile_view');
		
	}
}
