<?php
class req_form_model extends CI_Model{
	function __construct() {
		parent::__construct();
	}

	public function req_insert(){

		$memberID = $this->session->userdata('memberID');
		$data = array(
                'memberID' => $memberID,
                'requestType' => $this->input->post('type'),
                'amount' => $this->input->post('amount'),
                'message' => $this->input->post('message'),
                
        );
            
        $this->db->insert('request_donation', $data);

		
	}

	
}
?>