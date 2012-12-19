<?php

class Group_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_groups($page_num = 0, $groups_per_page = 20)
	{
		$this->db
			->select('G.id, G.name, COUNT(*) AS member_count')
			->join('UserGroups UG', 'UG.group_id = G.id')
			->group_by('G.id, G.name');
		$query = $this->db->get('Groups G');
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
