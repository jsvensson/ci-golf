	<div id="navbar" class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?= base_url(); ?>"><?= $this->lang->line('menu_item_brand') ?></a>
				<ul class="nav">
					<li><?= anchor('home', $this->lang->line('menu_item_home')) ?></li>
					<li><?= anchor('news', $this->lang->line('menu_item_news')) ?></li>
					<li><?= anchor('about', $this->lang->line('menu_item_information')) ?></li>
				</ul>
<?php

if ($this->session->userdata('login_state') === TRUE) {
	$this->load->view('partials/header_menu_signedin');
}
else {
	$this->load->view('partials/header_menu_loginform');
};

?>

			</div><!-- end .container -->
		</div><!-- end .navbar-inner -->
	</div><!-- end #navbar -->
