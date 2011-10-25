<?php if(!defined('PLX_ROOT')) exit; ?>
<?php include('info.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>">

<head>
	<title><?php $plxShow->pageTitle(); ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>

	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/css/darkFuture.css" media="screen" />
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/css/ie.css" media="screen" />
	<![endif]-->
	<?php $plxShow->templateCss() ?>

	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

</head>

<body id="top">

	<div id="header">

		<h1><?php $plxShow->mainTitle('link'); ?></h1>
		<p><?php $plxShow->subTitle(); ?></p>
	
		<ul id="nav">
	        <li><a href="<?php echo BLOG ?>" title="<?php $plxShow->lang('C_BLOG') ?>" class="headlink" ><?php $plxShow->lang('C_BLOG') ?></a></li>
	        <li><a href="<?php echo ME ?>" title="<?php $plxShow->lang('C_ME') ?>" class="headlink" ><?php $plxShow->lang('C_ME') ?></a></li>
	        <li><a href="<?php echo GALLERY ?>" title="<?php $plxShow->lang('C_GALLERY') ?>" class="headlink" ><?php $plxShow->lang('C_GALLERY') ?></a></li>
	        <li><a href="<?php echo PRO ?>" title="<?php $plxShow->lang('C_PRO') ?>" class="headlink"><?php $plxShow->lang('C_PRO') ?></a></li>
            <li><a href="<?php echo GITHUB ?>" title="<?php $plxShow->lang('C_GITHUB') ?>" class="headlink"><?php $plxShow->lang('C_GITHUB') ?></a></li>
         	<li><a href="<?php echo PROG ?>" title="<?php $plxShow->lang('C_PROG') ?>" class="headlink"><?php $plxShow->lang('C_PROG') ?></a></li>
		</ul>	

	</div>
