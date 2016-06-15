<h2><?php echo $title; ?></h2>
<?php foreach ($article as $article_item):?>
<h3><?php echo $article_item['title']; ?></h3>
<div class="article-list">
	<?php echo $article_item['text']; ?>
	<p><a href="<?php echo site_url('article/'.$article_item['id']) ?>" target="__blank">文章详情</a></p>
</div>
<?php endforeach; ?>