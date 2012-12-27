<?php

class Group_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_groups()
	{
		$query = $this->db->get('get_all_groups');
		return $query->result_array();
	}

	public function get_group($group_id)
	{
		$this->db
			->get('Groups')
			->where('id', $group_id)
			->limit(1);
		$query = $this->db->get();
		return $query->row();
	}

}

/* EOF */
