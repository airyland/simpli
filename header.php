<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" title="style (screen)" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="800-width" href="<?php bloginfo('template_directory'); ?>/800.css" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script src="<?php bloginfo('template_directory'); ?>/styleswitch.js" type="text/javascript">
/***********************************************
* Style Sheet Switcher v1.1- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/
</script>

<?php wp_head(); ?>
</head>

<body>
<div id="wrap">
<img class="topleft" src="<?php bloginfo('template_directory'); ?>/images/wings.jpg" alt=""/>
<div class="head"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></div>
<div id="nav">
	<div class="menu">
	<ul class="null">
		<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
<?php wp_list_pages('title_li=&depth=1&exclude=9,10,11'); ?>
	</ul>
	</div>
</div>

<div id="main">