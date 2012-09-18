<?php

class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_user($id = FALSE)
	{
		if ($id === FALSE)
		{
			$this->db->select("*, CONCAT_WS(' ', firstname, lastname) AS fullname", false);
			$query = $this->db->get('user');
			return $query->result_array();
		}

		$query = $this->db->get_where('user', array('id' => $id));
		return $query->row_array();
	}

	public function set_user()
	{
		// $this->load->helper('url');

		$data = array(
			'username'  => $this->input->post('username'),
			'firstname' => $this->input->post('firstname'),
			'lastname'  => $this->input->post('lastname'),
			'status'    => $this->input->post('status'),
			'level'     => $this->input->post('level'),
			'password'  => $this->input->post('password'),
		);

		return $this->db->insert('user', $data);
	}
}

?>