<?php

Class Model_dashboard extends CI_Model
{

	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

	function get_request_donation()
	{
		$query = $this->db->get('request_donation');

		return $query->result();
	}

	function status_request($request_ID,$status)
	{
		$sql ="UPDATE request_donation SET status ='$status' WHERE requestID = $request_ID";

		$this->db->query($sql);
	}
}




?>