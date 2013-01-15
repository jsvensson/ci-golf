<?php

class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('password');
	}

	public function get_all_users()
	{
		$this->db->select("*, CONCAT_WS(' ', firstname, lastname) AS fullname", FALSE);
		$query = $this->db->get('User');
		return $query->result_array();
	}

	private function get_user($user, $type = 'id')
	{
		$this->db->select("*, CONCAT_WS(' ', firstname, lastname) AS fullname", FALSE);

		// Get by id or email

		if ($type === "email") {
			$this->db->where('username', $user);
		}
		elseif ($type === "id") {
			$this->db->where('id', $user);
		}
		$query = $this->db->get('User', 1);
		return $query->row();

	}

	// Convenience wrappers for get_user()
	public function get_user_by_id($id)
	{
		return $this->user_model->get_user($id, 'id');
	}

	public function get_user_by_email($email)
	{
		return $this->user_model->get_user($email, 'email');
	}

	public function set_user($id = NULL)
	{

		// Salt and encrypt password (SHA1)
		$salted_pw = sha1($this->input->post('password') . password_salt());

		$data = array(
			'username'  => $this->input->post('username'),
			'firstname' => $this->input->post('firstname'),
			'lastname'  => $this->input->post('lastname'),
			'password'  => $salted_pw
		);

		if ($id) {
			$this->db->where('id', $id);
			return $this->db->update('User', $data);
		}
		else {
			return $this->db->insert('User', $data);
		}
	}
}

/* EOF */
