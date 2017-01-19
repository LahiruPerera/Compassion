<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	
	public function go_to()
	{
		if($this->logged_in)
		{
			$token=array("t"=>2);
			$this->load->view('add_event',$token);

		}
		else
		{
			redirect('/login/');
		}
		
	}
	public function go_search()
	{
		if($this->logged_in)
		{
			$data=array(
			"y"=>0
		);
		$this->load->view('search_event',$data);

		}
		else
		{
			redirect('/login/');
		}
		
	}
	public function Submit()
	{
		
			$data=array(
				
				"eventName"=>$this->input->post("eventname"),
				"date"=>$this->input->post("date"),
				"time"=>$this->input->post("time"),
				"venue"=>$this->input->post("place"),
				"description"=>$this->input->post("comments")
			);
			$this->load->model('model');
			$this->model->Add_Event($data);
			$token= array
			(
				"t"=>0
			);
		
		$this->load->view('add_event',$token);

	}
	
	
	public function NameSearch()
	{
		$event_name=$this->input->post("eventname");
		$this->load->model('model');
		$Q=$this->model->Name_Search($event_name);
		$x=$Q->num_rows();
		$data=array(
			"y"=>1,
			"q"=>$Q,
			"x"=>$x
		);
		$this->load->view('search_event',$data);
	}
	public function delete_eve($param)
	{
		$this->load->model("model");
		$n=$this->model->eve_del($param);
			$data=array(
				"y"=>2
				
			);
		$this->load->view('search_event',$data);
	}
	public function update_eve($param)
	{
		$event_id=$param;
		$this->load->model('model');
		$Q=$this->model->Id_Search($event_id);
		
		$data=array(
			"y"=>3,
			"q"=>$Q,
			"x"=>1,
			"p"=>$event_id
		);
		$this->load->view('search_event',$data);
	}
	public function upd($param)
	{
		
		$this->load->model('model');
		
		$id=$param;
		$datax=array(
			"eventName"=>$this->input->post("eventname"),
			"date"=>$this->input->post("date"),
			"time"=>$this->input->post("time"),
			"venue"=>$this->input->post("venue"),
			"description"=>$this->input->post("comments"),
		);
		$data=array_filter($datax);
		
		$this->model->update_data($id,$data);

		$this->load->model('model');
		$Q=$this->model->Id_Search($id);
		$x=$Q->num_rows();
		$data=array(
			"y"=>1,
			"q"=>$Q,
			"x"=>$x
		);
		$this->load->view('search_event',$data);

	}
}
