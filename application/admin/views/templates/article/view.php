<?php
echo '<h4>'.$article_item['title'].'</h4>';
?>
<div class="row publishTime">
<div class="col-xs-12 col-sm-8 col-sm-offset-2">
发布时间:&nbsp;<?php echo date_format(date_create($article_item['createtime']),'Y-m-d');?>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-8 col-sm-offset-2">
<?php echo $article_item['text']; ?>
</div>
</div>

