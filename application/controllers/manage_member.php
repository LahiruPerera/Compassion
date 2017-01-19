<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_member extends CI_Controller {

	//private $logged_in;

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('manage_member_v');
		}

		else
		{
			redirect('/login/');
		}
		

	}

	public function search()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->model('model_member');

			$data['records'] = $this->model_member->searchMember();
	        
	        $this->load->view('manage_member_v',$data);
	        
		}
		else
		{
			redirect('/login/');
		}
		
	}

	public function deleteMember($member_ID)
	{
		$this->load->model('model_member');

		$this->model_member->deleteMember($member_ID);

		$this->index();

	}

}