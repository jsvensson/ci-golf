	<h3>Nyheter</h3>

<?php foreach ($news as $news_item): ?>
	<h4><?php echo $news_item['title'] ?></h4>
	<div id="main">
		<?php echo $news_item['text'] ?>
	</div>
	<p><?php echo anchor('news/' . $news_item['id'] . '/' . $news_item['slug'], 'Visa nyhet'); ?></p>
<?php endforeach ?>