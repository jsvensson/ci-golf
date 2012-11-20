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

		$this->data['subview'] = 'pages/' . $page;
		$this->data['title'] = $titles[$page];
		$this->load->view('layouts/default', $this->data);
	}

}
?>
