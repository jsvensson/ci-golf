<?php

class Group extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('group_model');
	}

	// Route /groups - shows all groups
	public function index()
	{
		$this->data['grouplist'] = $this->group_model->get_all_groups();
		$this->data['title'] = 'Visar grupper';
		$this->data['subview'] = 'group/index';
		$this->load->view('layouts/default', $this->data);
	}

}

/* EOF */
