<?php

class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_news()
	{
		$query = $this->db->get('News');
		return $query->row_array();
	}

	public function get_news($news_id)
	{
		$query = $this->db
			->get('News')
			->where('id', $id);
		return $query->row_array();
	}

	public function set_news()
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'title' => $this->input->post('title'),
			'slug'  => $slug,
			'text'  => $this->input->post('text')
		);

		return $this->db->insert('News', $data);
	}
}

?>
