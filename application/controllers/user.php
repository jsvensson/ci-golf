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

	// user/join - form for registering a new account
	public function join()
	{
		$data['title'] = 'Registrera nytt konto';

		$this->load->view('templates/header', $data);
		$this->load->view('user/join');
		$this->load->view('templates/footer');

	}

	// create(), user/create - insert new user into db
	public function create()
	{

	}

	// home(), user/home - view your personal page
	public function home()
	{

	}

	// edit(), user/edit - edit your own profile
	public function edit()
	{
		
	}

}

?>