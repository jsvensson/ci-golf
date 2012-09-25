<?php

class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_user($id = FALSE)
	{
		$this->db->select("*, CONCAT_WS(' ', firstname, lastname) AS fullname", false);

		if ($id === FALSE)
		{
			$query = $this->db->get('user');
			return $query->result_array();
		}
		else
		{
			$query = $this->db->get_where('user', array('id' => $id));
			return $query->row_array();
		}
	}

	public function set_user()
	{
		$this->load->helper('password');

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