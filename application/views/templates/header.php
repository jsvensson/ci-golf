<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/bootstrap.css">
	<script type="text/javascript" src=""></script>
</head>
<body>
<ul>
	<li><a href="<?= site_url() ?>">Hem</a></li>
	<li><?= anchor('news', 'Nyheter') ?></li>
	<li><?= anchor('about', 'Information') ?></li>
</ul>