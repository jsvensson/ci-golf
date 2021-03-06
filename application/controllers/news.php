<?php

class News extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$this->data['active_nav_tab'] = 'news';
		$this->data['subview'] = 'news/index';
		$this->data['news'] = $this->news_model->get_all_news();
		$this->data['title'] = 'Nyheter';

		$this->load->view('layouts/default', $this->data);
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->data['title'] = 'Create news item';

		// Form validation
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->data['subview'] = 'news/create';

			// FIXME:
			$this->load->view('news/create');
		}
		else
		{
			$this->news_model->set_news();
			$this->data['subview'] = 'news/success';
			$this->load->view('layouts/default', $this->data);
		}
	}

	public function view($news_id)
	{
		$this->data['news_item'] = $this->news_model->get_news($news_id);

		if (empty($data['news_item']))
		{
			show_404('News controller: ' . $news_id);
		}

		$this->data['title'] = $this->data['news_item']['title'];
		$this->data['subview'] = 'news/view';

		$this->load->view('layouts/default', $this->data);
	}
}

?>
