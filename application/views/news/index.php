
<?php foreach ($news as $news_item): ?>

	<h2><?php echo $news_item['title'] ?></h2>
	<div id="main">
		<?php echo $news_item['text'] ?>
	</div>
	<p><?php echo anchor('news/' . $news_item['id'] . '/' . $news_item['slug'], 'Visa nyhet'); ?></p>
<?php endforeach ?>