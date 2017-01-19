<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_place_donation extends CI_Controller {

	//private $logged_in;

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		if($this->session->userdata('logged_in'))
		{

			$this->load->model('model_view_place_donation');

			$data['records'] = $this->model_view_place_donation->get_place_donation();

			$this->load->view('view_place_donation',$data);
		}

		else
		{
			redirect('/login/');
		}
		

	}

}

	