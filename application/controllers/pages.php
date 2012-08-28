<?php 

class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		if (!file_exists('application/views/pages/' . $page . '.php'))
		{
			// No such file, show 404
			show_404('Static page: ' . $page);
		}	

		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer', $data);


	}
}
?>