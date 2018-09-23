<?php

Class PlaceDonationModel extends CI_Model
{

	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function donate()
    {
        $memberID = $this->session->userdata('memberID');
        $date = date("Y-m-d");

    	$data=array(
        'memberID' => $memberID,
        'date' => $date,
		'amount' =>$this->input->post('amount'),
		'paymentMethod' => $this->input->post('paymentMethod'),
		'donationType' => $this->input->post('donationType'),
		'paymentFrequency' => $this->input->post('paymentFrequency'),
		'comment' => $this->input->post('comment'),
    	
		);
    	$this->db->insert('place_donation', $data);
    }

}
?>


