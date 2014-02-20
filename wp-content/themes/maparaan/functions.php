<?php

define('PADD_THEME_NAME','Maparaan');
define('PADD_THEME_VERS','1.0');
define('PADD_THEME_SLUG','maparaan');
define('PADD_GALL_THUMB_W',650);
define('PADD_GALL_THUMB_H',280);
define('PADD_HOME_THUMB_W',115);
define('PADD_HOME_THUMB_H',115);
define('PADD_YTUBE_W',250);
define('PADD_YTUBE_H',238);

define('PADD_THEME_PATH',get_theme_root() . DIRECTORY_SEPARATOR . PADD_THEME_SLUG);
define('PADD_FUNCT_PATH',PADD_THEME_PATH . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR);

automatic_feed_links();
remove_action('wp_head','wp_generator');

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div id="%1$s" class="padd-box %2$s">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2><div class="padd-interior"><div class="padd-interior-wrapper">',
	));
}

require PADD_FUNCT_PATH . 'library.php';

require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'socialnetwork.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'advertisement.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'widgets.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'input' . DIRECTORY_SEPARATOR . 'input-option.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'input' . DIRECTORY_SEPARATOR . 'input-socialnetwork.php';
require PADD_FUNCT_PATH . 'classes' . DIRECTORY_SEPARATOR . 'input' . DIRECTORY_SEPARATOR . 'input-advertisement.php';

require PADD_FUNCT_PATH . 'defaults.php';

require PADD_FUNCT_PATH . 'administration' . DIRECTORY_SEPARATOR . 'functions.php';











