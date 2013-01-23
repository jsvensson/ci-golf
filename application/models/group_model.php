<?php

class Group_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_groups()
	{
		$query = $this->db->get('Groups_With_Members');
		return $query->result_array();
	}

	public function get_group($group_id)
	{
		$this->db
			->select('*')
			->from('Groups')
			->where('id', $group_id)
			->limit(1);
		$query = $this->db->get();
		return $query->row();
	}

	public function set_group($id = NULL)
	{
		$data = array(
			'name' => $this->input->post('group_name')
		);
		return $this->db->insert('Groups', $data);
	}

}

/* EOF */
