<?php

Class Model_view_place_donation extends CI_Model
{

	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

	function get_place_donation()
	{
		$query = $this->db->get('place_donation');

		return $query->result();
	}

	function status_request($request_ID,$status)
	{
		$sql ="UPDATE request_donation SET status ='$status' WHERE requestID = $request_ID";

		$this->db->query($sql);
	}
}




?>