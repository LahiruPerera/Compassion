<?php

Class Profile_model extends CI_Model
{
	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

	function set_profile_pic($name)
	{
		$memberID = $this->session->userdata('memberID');
		$sql ="UPDATE member SET profile_pic = '$name' WHERE memberID = $memberID";

		$this->db->query($sql);

	}

	function get_profile_data()
	{
		$memberID = $this->session->userdata('memberID');
		$sql = "SELECT * FROM member WHERE memberID = $memberID";
		$result = $this->db->query($sql);
		return $result;
	}

	function update_profile_data()
	{
		$data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'contact' => $this->input->post('contact'),
                'district' => $this->input->post('district'),
                'occupation' => $this->input->post('occupation')
                );

		$memberID = $this->session->userdata('memberID');

		$this->db->where('memberID', $memberID);
		$this->db->update('member', $data); 

	}

	function get_place_donation()
	{
		$memberID = $this->session->userdata('memberID');
		$query = $this->db->get_where('place_donation', array('memberID' => $memberID));		
		return $query->result();
	}

	function get_request_donation()
	{
		$memberID = $this->session->userdata('memberID');
		$query = $this->db->get_where('request_donation', array('memberID' => $memberID));		
		return $query->result();
	}

	function get_place_donation_data($don_id)
	{

		$sql = "SELECT * FROM place_donation WHERE donationID = $don_id";
		$result = $this->db->query($sql);
		return $result;
	}

	function update_place_donation_data($don_id)
	{
		$data = array(
                'date' => $this->input->post('date'),
                'donationType' => $this->input->post('donationType'),
                'amount' => $this->input->post('amount'),
                'paymentMethod' => $this->input->post('paymentMethod'),
                'paymentFrequency' => $this->input->post('paymentFrequency'),
                'comment' => $this->input->post('comment')
                );


		$this->db->where('donationID', $don_id);
		$this->db->update('place_donation', $data); 

	}

	function get_request_donation_data($req_id)
	{

		$sql = "SELECT * FROM request_donation WHERE requestID = $req_id";
		$result = $this->db->query($sql);
		return $result;
	}

	function update_request_donation_data($req_id)
	{
		$data = array(
                'date' => $this->input->post('date'),
                'requestType' => $this->input->post('requestType'),
                'amount' => $this->input->post('amount'),
                'message' => $this->input->post('message')
                );


		$this->db->where('requestID', $req_id);
		$this->db->update('request_donation', $data); 

	}

}




?>