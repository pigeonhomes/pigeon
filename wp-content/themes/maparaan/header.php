<?php require 'functions/required/template-top.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<?php $scheme = get_option(PADD_THEME_SLUG . '_color_scheme','red'); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/schemes/' . $scheme . '/style.css' ?>" type="text/css" media="screen" />
<!--[if IE]>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/ie.css' ?>" type="text/css" media="screen" />
<![endif]-->
<?php
$icon = get_option(PADD_THEME_SLUG . '_favicon_url','');
if (!empty($icon)) {
	echo '<link rel="shortcut icon" href="' . $icon . '" />' . "\n";
}
?>
<script type="text/javascript" src="<?php echo get_option('home'); ?>/wp-includes/js/jquery/jquery.js?ver=1.3.2"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.s3slider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.loading.js"></script>
<?php
$tracker = get_option(PADD_THEME_SLUG . '_tracker_head','');
if (!empty($tracker)) {
	echo stripslashes($tracker);
}
?>
</head>

<body>
<?php
$tracker = get_option(PADD_THEME_SLUG . '_tracker_top','');
if (!empty($tracker)) {
	echo stripslashes($tracker);
}
?>
<div id="padd-container">

	<div id="padd-header">
		<div id="padd-header-wrapper">
			<div class="padd-box padd-box-title">
				<div class="padd-logo">
					<a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" /></a>
				</div>
				<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
				<p><?php bloginfo('description'); ?></p>
			</div>
				
			<div class="padd-box padd-box-search">
				<h2>Search</h2>
				<div class="padd-interior">
					<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
					<p><span class="padd-search-text">Search </span><input type="text" value="Search this site" name="s" id="s" /><button type="submit"><span>Search</span></button></p>
					</form>
				</div>
			</div>

		</div>
	</div>
	
	<div id="padd-categories" class="padd-box padd-box-categories">
		<h2>Categories</h2>
		<div class="padd-interior">
			<ul>
				<li<?php if (is_home()) { echo ' class="current-cat"'; } ?>><a href="<?php echo get_option('home'); ?>">Home</a></li>
				<?php wp_list_cats('sort_column=name&optioncount=0&hierarchical=0'); ?>
			</ul>
		</div>
	</div>

	<div id="padd-body">
		<div id="padd-body-wrapper">

<?php if (is_home()) : ?>
<div id="padd-featsubs">
	<div id="padd-featsubs-wrapper">
		<div id="padd-featured" class="padd-box">
			<h2>Featured Posts</h2>
			<div class="padd-interior">
				<?php padd_featured_posts(); ?>
			</div>
		</div>
		<div id="padd-subscribed">
			<h2>Subscribe to My Blog</h2>
			<div class="padd-interior">
				<?php padd_widget_funct_subscribe_home(); ?>
			</div>
		</div>
		<div class="padd-clear"></div>
	</div>
</div>
<?php endif; ?>
