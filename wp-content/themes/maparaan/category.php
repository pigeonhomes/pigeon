<?php
/*
Template Name: Category
*/
?>
<?php get_header(); ?>

<div id="padd-content">
	<div id="padd-content-wrapper">
	
<?php if (have_posts()) : ?>

<div class="padd-post-group padd-post-group-result">
	<div class="padd-post-group-title">
		<h2>Posts Under <?php single_cat_title(); ?> Category</h2>
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
		<p>Sorry, but you are looking for a category that isn't here.</p>
	</div>
</div>

<?php endif; ?>

	</div>
</div>

<?php get_sidebar(); ?>

<div class="padd-clear"></div>

<?php get_footer(); ?>
