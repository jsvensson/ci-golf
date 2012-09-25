<?php

// Load language files
$this->lang->load('header');
$this->lang->load('form');

// Data for stuff
$data['form_login_class'] = array('class' => 'navbar-form pull-right');

	

?><!DOCTYPE html>
<html lang="<?= $this->lang->line('doctype_lang') ?>">
<head>
	<title><?= $title ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/default.css">
</head>
<body>
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

				<?= form_open('user/login', $data['form_login_class']) ?>

					<input class="span2" type="text" placeholder="<?= $this->lang->line('form_placeholder_email') ?>">
					<input class="span2" type="password" placeholder="<?= $this->lang->line('form_placeholder_password') ?>">
					<button type="submit" class="btn"><?= $this->lang->line('form_login_button') ?></button>
				<?= form_close(); ?>

			</div><!-- end .container -->
		</div><!-- end .navbar-inner -->
	</div><!-- end #navbar -->

	<div class="container">

<?php $this->load->view($subview, $data) ?>

	</div><!-- end .container -->


<!-- Load javascript -->
    <script type="text/javascript" src="<?= base_url(); ?>js/jquery.js"></script>

</body>
</html>