<!-- <div class="row">
<div class="col-xs-12 main-slide">
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img class="img-responsive" src="http://changxu.qiniudn.com/wedding1.jpg"></div>
        <div class="swiper-slide"><img class="img-responsive" src="http://changxu.qiniudn.com/wedding2.jpg"></div>
        <div class="swiper-slide"><img class="img-responsive" src="http://changxu.qiniudn.com/wedding9.jpg"></div> 
    </div>
    <div class="swiper-pagination"></div>
</div>
<div class="slide-mask">畅 <span><i>&#38;</i></span> 旭</div>
</div>
</div> -->
<div class="row">
    <div class="col-xs-12">
        <div class="row">
<?php 
    $num =count($news); 
    for($i=0;$i<$num;++$i){?>
    <div class="col-sm-6 <?php echo $i%2==0?'':'col-sm-offset-6' ?>">
        <a href="<?php echo site_url('news/'.$news[$i]['id']); ?>">
            <div class="row history">
                <div class="col-xs-4 date"><?php echo date_format(date_create($news[$i]['createtime']),'Y.m.d');?></div>
                <div class="col-xs-8 title"><?php echo $news[$i]['title'];?></div>
            </div>
        </a>
        </div> 
 <?php } ?>
       
    </div>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url("/public/js/swiper.js"); ?>"></script>
<script type="text/javascript">
  var mySwiper = new Swiper ('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true,
        autoHeight: true,
        autoplay:5000

  })
</script>
