<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url("/public/css/swiper-3.3.1.min.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("/public/css/site.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("/public/js/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css"); ?>">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<title><?php echo $title; ?></title>
</head>
<body>
<header>
	<ul class="level1 fl">
	<li><a href="<?php echo site_url('') ?>" >主页</a></li>
	<li><a href="<?php echo base_url("/public/hunli.html"); ?>">婚礼</a></li>
	<li>博客</li>
	</ul>
	<div class="headerTime fl">
	畅旭点滴
	</div>
	<ul class="level1 fl">
	<li>相册</li>
	<li>留言</li>
    <li><a href="<?php echo base_url('/admin/index.php/article') ?>" >后台</a></li>
</ul>
</header>
<div class="container-fluid main">	

