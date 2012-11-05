<?php

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->data['user_id']     = $this->session->userdata('user_id');
		$this->data['login_state'] = $this->session->userdata('login_state');
	}
}

/* EOF */
