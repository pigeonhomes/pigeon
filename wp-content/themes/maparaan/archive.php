<?php
/*
Template Name: Archive
*/
?>
<?php get_header(); ?>

<div id="padd-content">
	<div id="padd-content-wrapper">
	
<?php if (have_posts()) : ?>

<div class="padd-post-group padd-post-group-result">
	<div class="padd-post-group-title">
	<?php if (is_category()) : ?>
		<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
	<?php elseif (is_tag()) : ?>
		<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
	<?php elseif (is_day()) : ?>
		<h2>Archive for <?php the_time('F j, Y'); ?></h2>
	<?php elseif (is_month()) : ?>
		<h2>Archive for <?php the_time('F Y'); ?></h2>
	<?php elseif (is_year()) : ?>
		<h2>Archive for <?php the_time('Y'); ?></h2>
	<?php elseif (is_author()) : ?>
		<h2>Author Archive</h2>
	<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
		<h2>Blog Archives</h2>
	 <?php endif; ?>
	</div>

	<div class="padd-post-list padd-post-list-result">
	<?php while (have_posts()) : ?>
		<?php the_post(); ?>
		<div class="padd-post-item padd-post-item-result" id="post-<?php the_ID(); ?>">
			<?php
				$def = get_template_directory_uri() . '/images/thumbnail.jpg';
				$img = padd_theme_get_thumbnail('paddimage',$def,PADD_HOME_THUMB_W,PADD_HOME_THUMB_H);
			?>
			<a href="<?php the_permalink() ?>"><img class="header" src="<?php echo $img; ?>" alt="<?php the_title(); ?>" /></a>
			<div class="padd-post-item-title">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			</div>
			<div class="padd-post-item-entry">
				<?php 
					if (function_exists('tweetmeme')) {
						echo padd_tm_generate_button(); 
					}
					echo padd_theme_summary(get_the_content());
				?>
				<div class="padd-clear"></div>
			</div>
		</div>
	<?php endwhile; ?>
	</div>
	
	<?php padd_page_navigation(); ?>
</div>

<?php else : ?>	

<div class="padd-post-group padd-post-group-result padd-post-group-error">
	<div class="padd-post-group-title">
		<h2>Not Found</h2>
	</div>
	<div class="padd-post-group-descr">
		<?php
			if (is_http://localhost/wordpress-2.9/welcome-2009/category()) :
				printf('<p>Sorry, but there aren\'t any posts in the %s category yet.</p>', single_cat_title('',false));
			elseif (is_date()) :
				echo('<p>Sorry, but there aren\'t any posts with this date.</p>');
			elseif (is_author()) :
				$userdata = get_userdatabylogin(get_query_var('author_name'));
				printf('<p>Sorry, but there aren\'t any posts by %s yet.</p>', $userdata->display_name);
			else :
				echo '<p>There are no posts found.</p>';
			endif;
			?>
	</div>
</div>

<?php endif; ?>

	</div>
</div>

<?php get_sidebar(); ?>

<div class="padd-clear"></div>

<?php get_footer(); ?>

