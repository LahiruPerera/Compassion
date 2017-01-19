<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public $logged_in;

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
			$this->load->model('model_dashboard');

			$data['records'] = $this->model_dashboard->get_request_donation();

			$this->load->view('dashboard',$data);
		}

		else
		{	
			redirect('/login/');
		}	
	}

	public function log_out()
	{
		$this->session->set_userdata('logged_in',0);
		//$this->session->sess_destroy();
		redirect('/Home/');
	}

	public function set_status($request_ID,$status)
	{

		$this->load->model('model_dashboard');
		$this->model_dashboard->status_request($request_ID,$status);
		$this->index();
	}

}