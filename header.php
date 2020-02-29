<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
 <!DOCTYPE HTML>

 <html>

    <head>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <meta http-equiv="Cache-Control" content="no-transform" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

        <meta name="renderer" content="webkit">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <meta http-equiv="x-dns-prefetch-control" content="on">

        <link ref="dns-prefetch" href="//gravatar.loli.net" />
		
		<link rel="stylesheet" href="/usr/themes/Komorebi/css/iconfont.css">
		
		<link rel="stylesheet" href="/usr/themes/Komorebi/css/prism.css"> <script src="/usr/themes/Komorebi/js/prism.js"></script>

        <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

		<?php $this->header(); ?>

        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">

        <style type="text/css">header h1{background:url(<?php $this->options->themeUrl('img/post-title.png'); ?>) no-repeat;width:100%;margin:50px 0 0;height:45px;}</style>
		
    </head>

    <body>

    	<div class="wrapper">

    
    
