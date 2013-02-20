<?php

class Group extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('group_model');
	}

	// Route group/list - shows all groups
	public function index()
	{
		$this->data['grouplist'] = $this->group_model->get_all_groups();
		$this->data['title'] = 'Visar grupper';
		$this->data['subview'] = 'group/list';
		$this->data['submenu'] = 'partials/menu_sub_group';
		$this->load->view('layouts/default', $this->data);
	}

	// Route group/create - form target for creating a group
	public function create()
	{
		$this->load->library('form_validation');
		$this->lang->load('form');

		if ($this->form_validation->run() === FALSE) {
			// Validation failed
		}
		else {
			// Validation passed, add group
			$this->group_model->set_group();
			redirect_to('group/list');
		}
	}

	public function show($group_id)
	{
    $this->data['group']            = $this->group_model->get_group($group_id);
    $this->data['group_members']    = $this->group_model->get_members_of_group($group_id);
    $this->data['group_nonmembers'] = $this->group_model->get_nonmembers_of_group($group_id);
    $this->data['subview']          = 'group/show';
    $this->data['submenu']          = 'partials/menu_sub_group';
    $this->load->view('layouts/default', $this->data);
	}

}

/* EOF */
