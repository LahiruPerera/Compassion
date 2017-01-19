<?php

Class Model_member extends CI_Model
{

	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }


    public function searchMember()
    {
		$name = $this->input->post('name');

    	$sql ="SELECT memberID,name,email,district,occupation FROM member WHERE name LIKE '%".$name."%' ";

        $result = $this->db->query($sql)->result();

        return $result;
    }

    public function deleteMember($member_ID)
    {
        $sql ="DELETE FROM member WHERE memberID = $member_ID";

        $this->db->query($sql);

    }
}

?>