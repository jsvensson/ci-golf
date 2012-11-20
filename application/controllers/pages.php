<?php

class Pages extends MY_Controller {

	public function view($page = 'home')
	{
		if (!file_exists('application/views/pages/' . $page . '.php'))
		{
			// No such file, show 404
			show_404('Static page: ' . $page);
		}

		// FIXME: Ugly hack for static page titles
		$titles = array(
			'index' => 'Golf - framsidan',
			'about' => 'Golf - Information'
		);

		// FIXME: another ugly hack for static page active nav tabs
		$nav = array(
			'index' => NULL,
			'about' => 'about'
		);

		$this->data['active_nav_tab'] = $nav[$page];
		$this->data['subview'] = 'pages/' . $page;
		$this->data['title'] = $titles[$page];
		$this->load->view('layouts/default', $this->data);
	}

}
?>
