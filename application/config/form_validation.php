<?php

$config = array(
	'user/join' => array(
		array(
			'field' => 'username',
			'label' => 'lang:form_name_username',
			'rules' => 'trim|required|is_unique[user.username]|valid_email'
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
	)
);

/* EOF */
