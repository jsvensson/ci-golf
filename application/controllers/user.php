<?php

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$data['user'] = $this->user_model->get_user();
		$data['title'] = 'Visar användare';

		$this->load->view('templates/header', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}
}

?>