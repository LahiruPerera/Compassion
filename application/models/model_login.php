<?php

Class Model_login extends CI_Model
{
	public function login_user()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$sql = "SELECT memberID,email,role,name,password FROM member WHERE email= '{$email}' LIMIT 1";
		$result = $this->db->query($sql);
		$row = $result->row();

		if($result->num_rows() === 1)
		{
			if($row->password === md5($password))
			{
				$session_data = array(
					'memberID' => $row->memberID,
					'role' => $row->role,
					'name' => $row->name,
					'email' => $row->email
					);

				$this->set_session($session_data);
				return 'logged_in';
			}
			else
			{
				return 'incorrect_password';
			}
		}
		else
		{
			return 'incorrect_email';
		}
	}

	public function set_session($session_data)
	{
		$sess_data = array(
			'memberID' => $session_data['memberID'],
			'email' => $session_data['email'],
			'name' => $session_data['name'],
			'role' => $session_data['role'],
			'logged_in' => 1
			);

		$this->session->set_userdata($sess_data);
		/*
		print_r($session_data);
		$this->load->library('session');
		$_SESSION['memberID'] = $session_data['memberID'];

		echo "sess ".$session_data['memberID'];

		*/
	}

}