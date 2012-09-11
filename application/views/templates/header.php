<?php

// Load language file
$this->lang->load('menu')

?><!DOCTYPE html>
<html lang="sv">
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
					<li><?= anchor('news', $this->lang->line('menu_item_news')) ?></li>
					<li><?= anchor('about', $this->lang->line('menu_item_information')) ?></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="nav-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
           </li>
				</ul>

				<form class="navbar-form pull-right">
					<input class="span2" type="text" placeholder="<?= $this->lang->line('menu_login_email') ?>">
					<input class="span2" type="password" placeholder="<?= $this->lang->line('menu_login_password') ?>">
					<button type="submit" class="btn"><?= $this->lang->line('menu_login_submit') ?></button>
				</form>
			</div><!-- end .container -->
		</div><!-- end .navbar-inner -->
	</div><!-- end #navbar -->

	<div class="container">