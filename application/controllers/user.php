<?php

class User extends CI_Controller {

	public $data = array('subview' => 'subview-missing');

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->data['login_state'] = $this->session->userdata('login_state');
	}

	public function index()
	{
		$this->data['subview'] = 'user/index';
		$this->data['user'] = $this->user_model->get_user();
		$this->data['title'] = 'Visar användare';

		$this->load->view('layouts/default', $this->data);
	}

	// Route /join - form for registering a new account
	public function join()
	{
		$this->load->library('form_validation');
		$this->lang->load('form');

		$this->data['title'] = 'Registrera nytt konto';

		// Custom validation error messages for registration
		$this->form_validation->set_message('is_unique', $this->lang->line('form_is_unique'));
		$this->form_validation->set_message('matches', $this->lang->line('form_password_matches'));

		// Form validation
		$this->form_validation->set_rules('username', 'lang:form_name_username', 'trim|required|is_unique[user.username]|valid_email');
		$this->form_validation->set_rules('password', 'lang:form_name_password', 'required|min_length[6]|matches[verify_password]');
		$this->form_validation->set_rules('verify_password', 'lang:form_name_verify_password', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->data['subview'] = 'user/join';
			$this->load->view('layouts/default', $this->data);
		}
		else
		{
			// Validation passed, add user
			$this->user_model->set_user();

			$this->data['subview'] = 'user/success';
			$this->load->view('layouts/default', $this->data);
		}
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

		$this->db->where('username', $user);
		$query = $this->db->get('user', 1);
		$row = $query->row();

		// Check password
		$is_salted = check_salt($pw, $row->password);

		if ($is_salted === TRUE) {
			// Passwords match, proceed with login setup
			$this->session->set_userdata('login_state', TRUE);
			$this->session->set_userdata('user_level', $row->level);
			redirect(base_url());
		}
		else {
			// wrong credentials, do stuff
			$this->data['subview'] = 'user/login_error';
			$this->load->view('layouts/default', $this->data);
		}
	}

	// Route /home - view your personal page
	public function home()
	{
		$this->data['title'] = 'Min profil';
		$this->data['subview'] = 'user/home';
		$this->load->view('layouts/default', $this->data);
	}

	// Route /home/edit/ - edit your own profile
	public function edit()
	{
		
	}

}

?>