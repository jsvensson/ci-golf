<?php

$config = array(
	// user/join, form rules for new user registration
	'user/join' => array(
		array(
			'field' => 'username',
			'label' => 'lang:form_name_username',
			'rules' => 'trim|required|is_unique[User.username]|valid_email'
		),
		array(
			'field' => 'password',
			'label' => 'lang:form_name_password',
			'rules' => 'required|min_length[6]|matches[verify_password]'
		),
		array(
			'field' => 'verify_password',
			'label' => 'lang:form_name_verify_password',
			'rules' => 'required'
		)
	),

	// user/settings, form rules for modifying user settings
	'user/settings' => array(
		array(
			'field' => 'username',
			'label' => 'lang:form_name_username',
			'rules' => 'trim|required|valid_email'
		),
		array(
			'field' => 'password',
			'label' => 'lang:form_name_password',
			'rules' => 'required|min_length[6]|matches[verify_password]'
		),
		array(
			'field' => 'verify_password',
			'label' => 'lang:form_name_verify_password',
			'rules' => 'required'
		)
	),

	// group/create, form rules for creating a new group
	'group/create' => array(
		array(
			'field' => 'name',
			'label' => 'Group name',
			'rules' => 'trim|min_length[5]'
		)
	)

);

/* EOF */
