<?php

// Load language files
$this->lang->load('header');
$this->lang->load('form');

?><!DOCTYPE html>
<html lang="<?= $this->lang->line('doctype_lang') ?>">
<head>
	<title><?= $title ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/screen.css" media="screen">
</head>
<body>

<?php $this->load->view('partials/header_menu', $this->data); ?>

<?php
if (isset($this->data['submenu'])): ?>
	<div class="container">

<?php	$this->load->view($this->data['submenu']); ?>
	</div>
<?php endif ?>

	<div class="container">

<?php $this->load->view($this->data['subview'], $this->data) ?>

	</div><!-- end .container -->

<!-- Load javascript -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery/jquery.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap/bootstrap.js"></script>

</body>
</html>
