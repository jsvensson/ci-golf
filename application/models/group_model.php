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
    return $query->result();
  }

  public function get_members_of_group($group_id)
  {
    $this->db
      ->select("*, CONCAT_WS(' ', firstname, lastname) AS fullname", false)
      ->from('User U')
      ->join('UserGroups UG', 'U.id = UG.user_id')
      ->where('UG.group_id', $group_id);
    $query = $this->db->get();
    return $query->result();
  }

  public function get_nonmembers_of_group($group_id)
  {
    $query = $this->db->query("CALL get_nonmembers_of_group(?);", $group_id);
    return $query->result();
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

  public function add_member_to_group($user_id, $group_id)
  {
    $data = array($user_id, $group_id);
    return $this->db->insert('UserGroups', $data);
  }

  public function add_members_to_group($user_id_array, $group_id)
  {
    foreach ($user_id_array as $user_id) {
      add_member_to_group($user_id, $group_id);
    }
  }

  public function remove_member_from_group($user_id, $group_id)
  {
    $this->db
      ->where('user_id', $user_id)
      ->where('group_id', $group_id)
      ->delete('UserGroups');
  }

}

/* EOF */
