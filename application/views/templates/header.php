<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/bootstrap.css">
	<script type="text/javascript" src=""></script>
</head>
<body>
<ul>
	<li><a href="<?php echo site_url() ?>">Hem</a></li>
	<li><?php echo anchor('news', 'Nyheter') ?></li>
</ul>