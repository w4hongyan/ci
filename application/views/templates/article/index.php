<div class="row">
    <div class="col-xs-12">
        <div class="row article_list">
<?php
    $num =count($article);
    for($i=0;$i<$num;++$i){?>
    <div class="col-sm-6 col-xs-12">
        <a href="<?php echo site_url('article/'.$article[$i]['id']); ?>">
            <div class="row history">
            <?php if($article[$i]['headImg']): ?>
            <div class="col-xs-12 headimg">
                <img src="<?php echo base_url($article[$i]['headImg']) ?>" class="img-responsive" />
            </div>
        <?php endif ?>
                <div class="col-xs-4 date"><?php echo date_format(date_create($article[$i]['createtime']),'Y.m.d');?></div>
                <div class="col-xs-8 title"><?php echo $article[$i]['title'];?></div>
            </div>
        </a>
        </div>
 <?php } ?>

    </div>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url("/public/js/masonry.pkgd.min.js"); ?>"></script>
<script type="text/javascript" src="http://apps.bdimg.com/libs/imagesloaded/3.0.4/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript">
$(function(){
  $(".article_list").imagesLoaded(function(){//图片加载完毕后
    $(".article_list").masonry({
      columnWidth: $(this).find('.col-sm-6')[0],
      itemSelector:'.col-sm-6',
    });
  })
})

</script>
