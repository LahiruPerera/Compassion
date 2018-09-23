<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_login');
	}

	public function index()
	{

		$this->load->view('login');

	}

	public function login_user()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email Address','trim|required|min_length[10]|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[6]');

		if($this->form_validation->run() == FALSE)
		{
			$errors['errors'] = validation_errors();
			//echo "hello";
			$this->load->view('login',$errors);
			
		}

		else
		{

			$this->load->model('model_login');
			$result = $this->model_login->login_user();
			$role = $this->session->userdata('role');

			switch($result)
			{
				case 'logged_in':
					
					if($role=="super_admin")
					{
						redirect('/dashboard/');
					}
					else
					{
						redirect('/Home/');
					}
					break;

				case 'incorrect_password':
					$errors['errors'] ="Invalid Password. Please try again.";
					$this->load->view('login',$errors);
					break;

				case 'incorrect_email':
					$errors['errors'] ="Invalid Email. Please try again.";
					$this->load->view('login',$errors);
					break;	

			}
		}
	}
}
