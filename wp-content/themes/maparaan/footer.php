
		</div>
	</div>

	<div id="padd-footer">
		<div id="padd-footer-wrapper">
			<div id="padd-footer-content">
				<div id="padd-footer-content-wrapper">

<div class="padd-box padd-footer-popular-posts">
	<h2>Popular Posts</h2>
	<div class="padd-interior">
		<?php if (function_exists('akpc_most_popular')) : ?>
		<ul>
			<?php akpc_most_popular(5,'<li><span class="padd-wrap">','</span></li>'); ?>
		</ul>
		<?php else : ?>
		<p class="notice">You have to install <a href="http://wordpress.org/extend/plugins/popularity-contest/">Alex King's Popularity Contest</a> plugin.</p>
		<?php endif; ?>
	</div>
</div>
<div class="padd-box padd-footer-recent-comments">
	<h2>Recent Comments</h2>
	<div class="padd-interior">
		<?php padd_theme_recent_comments(); ?>
	</div>
</div>
<div class="padd-box padd-box-small padd-footer-pages">
	<h2>Pages</h2>
	<div class="padd-interior">
		<ul>
			<?php wp_page_menu('show_home=1&title_li='); ?>
		</ul>
	</div>
</div>
<div class="padd-box padd-box-small padd-footer-blogroll">
	<h2>Blogroll</h2>
	<div class="padd-interior">
		<ul>
			<?php padd_theme_list_bookmarks(); ?>
		</ul>
	</div>
</div>
<div class="padd-clear"></div>

				</div>
			</div>
			<div id="padd-footer-final">
				<div id="padd-footer-final-wrapper">
					<p class="copyright">Copyright &copy; <?php echo date('Y')?> <?php bloginfo('name'); ?>.</p>
					<?php padd_theme_credits(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
<?php
$tracker = get_option(PADD_PREFIX . '_tracker_bot','');
if (!empty($tracker)) {
	echo stripslashes($tracker);
}
?>
</body>
</html>

<?php require 'functions/required/template-bot.php'; ?>

