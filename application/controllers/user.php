<?php

class User extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('user_credentials');
	}

	// Route /user - shows all users
	public function index()
	{
		if ($this->user_credentials->logged_in()) {
			$this->data['userlist'] = $this->user_model->get_user();
			$this->data['title'] = 'Visar användare';
			$this->data['subview'] = 'user/index';
			$this->load->view('layouts/default', $this->data);
		}
	}

	// Route /user/view/$1 - show specific user
	public function view($view_user_id = NULL)
	{
			if ($view_user_id === NULL) {
				redirect(base_url());
			};
			$this->data['user'] = $this->user_model->get_user_by_id($view_user_id);
			$this->data['title'] = 'Användare ' . $view_user_id;
			$this->data['subview'] = 'user/view';
			$this->load->view('layouts/default', $this->data);
	}

	// Route /join - form for registering a new account
	public function join()
	{
		$this->load->library('form_validation');
		$this->lang->load('form');

		// Custom validation error messages for registration
		$this->form_validation->set_message('is_unique', $this->lang->line('form_is_unique'));
		$this->form_validation->set_message('matches', $this->lang->line('form_password_matches'));

		if ($this->form_validation->run() === FALSE) {
			// Validation failed
			$this->data['subview'] = 'user/join';
		}
		else {
			// Validation passed, add user
			$this->user_model->set_user();
			$this->data['subview'] = 'user/success';
		}
		$this->data['title'] = 'Registrera nytt konto';
		$this->load->view('layouts/default', $this->data);
	}

	// Route /user/logout - destroy user session
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	// Route /user/login - create user session
	public function login()
	{
		$user = $this->security->xss_clean($this->input->post('username'));
		$pw = $this->security->xss_clean($this->input->post('password'));

		$row = $this->user_model->get_user_by_email($user);

		// Check password
		if (check_salt($pw, $row->password) === TRUE) {
			// Passwords match, proceed with login setup
			$this->session->set_userdata('user_id', $row->id);
			$this->session->set_userdata('login_state', TRUE);
			$this->session->set_userdata('user_level', $row->level);

			redirect(base_url());
		}
		else {
			// wrong credentials, do stuff
			$this->data['subview'] = 'user/error_incorrect_login';
			$this->load->view('layouts/default', $this->data);
		}
	}

	// Route /home - view your personal page
	public function home()
	{
		if ($this->user_credentials->is_logged_in()) {
			$this->get_current_user();

			$this->data['active_nav_tab'] = 'home';
			$this->data['title'] = 'Min profil';
			$this->data['subview'] = 'user/home';
			$this->load->view('layouts/default', $this->data);
		}
	}

	// Route /home/settings - view account settings
	public function settings()
	{
		if ($this->user_credentials->is_logged_in()) {
			$this->load->library('form_validation');
			$this->lang->load('form');
			$this->get_current_user();

			$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');

			if ($this->form_validation->run() === TRUE) {
				// Validation passed, update settings
				$this->user_model->set_user($user_id);

				// Get updated user data to repopulate form
				$this->data['user'] = $this->user_model->get_user_by_id($user_id);
				$this->data['message']['type'] = "success";
				$this->data['message']['text'] = "Inställningar sparade";
			}
			$this->data['title'] = 'Inställningar';
			$this->data['subview'] = 'user/settings';
			$this->load->view('layouts/default', $this->data);
		}
	}

	private function get_current_user()
	{
			$this->data['user'] = $this->user_model->get_user_by_id($this->data['user_id']);
	}

}

/* EOF */
