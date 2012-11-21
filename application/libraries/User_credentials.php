<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_credentials {

	public function is_logged_in()
	{
		$CI =& get_instance();
		$status = $CI->session->userdata('login_state');

		if ($status === TRUE) {
			return TRUE;
		}
		else {
			$CI->data['subview'] = 'user/error_requires_login';
			$CI->load->view('layouts/default', $CI->data);
		}
	}

	public function user_level($required_level)
	{
		$CI =& get_instance();
		$user_level = $CI->session->userdata('user_level');

		if ($user_level >= $required_level) {
			return TRUE;
		}
		else {
			$CI->data['subview'] = 'user/error_low_level';
			$CI->load->view('layouts/default', $CI->data);
		}
	}

}

/* EOF */
