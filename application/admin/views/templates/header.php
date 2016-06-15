<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url("/public/css/swiper-3.3.1.min.css"); ?>">
<link href="//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url("/public/css/site.css"); ?>">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.js"></script>
<title><?php echo $title; ?></title>
</head>
<body>
<header>
	<ul class="level1 fl">
	<li><a href="/ci" >主页</a></li>
	<li><a href="<?php echo site_url('/article') ?>" >文章</a></li>
	<li>相册</li>
	</ul>
	<div class="headerTime fl">
	畅旭点滴
	</div>
	<ul class="level1 fl">
	<li>留言</li>
	<?php if(isset($_SESSION['loginuser'])):?>
		<li><a href="<?php echo site_url('logout') ?>" ><?php echo $this->session->loginuser; ?></a></li>
	<?php else: ?>
		<li><a href="<?php echo site_url('login') ?>">登录</a></li>
	<?php endif; ?>
</ul>
</header>
<div class="container-fluid main">	

