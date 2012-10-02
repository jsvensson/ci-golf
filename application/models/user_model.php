<?php

class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('password');
	}

	public function get_user($user = FALSE)
	{
		$this->db->select("*, CONCAT_WS(' ', firstname, lastname) AS fullname", false);

		if ($user === FALSE)
		{
			$query = $this->db->get('user');
			return $query->result_array();
		}
		else
		{
			$this->db->where('username', $user);
			$query = $this->db->get('user', 1);
			return $query->row();
		}
	}

	public function set_user()
	{

		// Salt and encrypt password (SHA1)
		$salted_pw = sha1($this->input->post('password') . password_salt());

		$data = array(
			'username'  => $this->input->post('username'),
			'firstname' => trim($this->input->post('firstname')),
			'lastname'  => trim($this->input->post('lastname')),
			'level'     => $this->input->post('level'),
			'password'  => $salted_pw,
		);

		return $this->db->insert('user', $data);
	}
}

?>