<?php

// Load language files
$this->lang->load('header');
$this->lang->load('form');

?><!DOCTYPE html>
<html lang="<?= $this->lang->line('doctype_lang') ?>">
<head>
	<title><?= $title ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/default.css">
</head>
<body>

<?php $this->load->view('partials/header_menu', $this->data); ?>

	<div class="container">

<?php $this->load->view($this->data['subview'], $this->data) ?>

	</div><!-- end .container -->


<!-- Load javascript -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.js"></script>

</body>
</html>