
<div id="padd-sidebar">
	<div id="padd-sidebar-wrapper">
	
	<?php if (is_home()) : ?>
	
<div class="padd-box padd-box-popular-posts">
	<h2>From Our Blog</h2>
	<div class="padd-interior">
		<div class="padd-interior-wrapper">	
			<ul>
				<?php padd_widget_funct_recent_posts('before=<li><span class="padd-wrap">&after=</span></li>'); ?>
			</ul>
		</div>
	</div>
</div>
	
	<?php else : ?>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>

<div class="padd-box padd-box-popular-posts">
	<h2>From Our Blog</h2>
	<div class="padd-interior">
		<div class="padd-interior-wrapper">	
			<ul>
				<?php padd_widget_funct_recent_posts('before=<li><span class="padd-wrap">&after=</span></li>'); ?>
			</ul>
		</div>
	</div>
</div>

<div class="padd-box padd-box-tweet">
	<h2><span>Latest Tweet</span></h2>
	<div class="padd-interior">
		<div class="padd-interior-wrapper">
		<?php
			if (function_exists('twitter_messages')) {
				$padd_twitter = unserialize(get_option(PADD_THEME_SLUG . '_sn_username_twitter'));
				twitter_messages($padd_twitter->get_username(), 1, false, true, '#', true, true, false);
			} else {
				echo '<p class="notice">You need <a href="http://wordpress.org/extend/plugins/twitter-for-wordpress/">Twitter for Wordpress</a> plugin in order to work.</p>';
			}
		?>
		</div>
	</div>
</div>

<div class="padd-box padd-box-archives">
	<h2>Archives</h2>
	<div class="padd-interior">
		<div class="padd-interior-wrapper">	
			<ul>
				<?php wp_get_archives('title_li=&type=monthly&before=<span class="padd-wrap">&after=</span>'); ?>
			</ul>
		</div>
	</div>
</div>

<div class="padd-box padd-box-ads">
	<h2><span>Sponsors</span></h2>
	<div class="padd-interior">
		<div class="padd-interior-wrapper">
			<?php padd_widget_funct_sponsors(); ?>
		</div>
	</div>
</div>

	<?php endif; ?>
	
	<?php endif; ?>

	</div>
</div>


