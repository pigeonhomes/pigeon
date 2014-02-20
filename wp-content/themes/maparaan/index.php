<?php
/*
Template Name: Index Page
*/
?>
<?php get_header(); ?>

<div id="padd-content">
	<div id="padd-content-wrapper">

<div class="padd-post-group padd-post-group-index">
	<div class="padd-post-group-title">
		<h2>Home Page</h2>
	</div>
	
	<div class="padd-post-list">
	
		<?php 
			$id = intval(get_option(PADD_THEME_SLUG . '_post_1_page_id',1));
			$post = get_post($id); 
			$cust = get_post_custom($id);
		?>
		<div class="padd-post-item padd-post-item-index padd-post-item-index-page-1">
			<div class="padd-post-item-title">
				<h2><?php echo $post->post_title; ?></h2>
			</div>
			<div class="padd-post-item-entry">
				<?php 
					echo '<p>';
					if (!empty($cust['padd-summary'][0])) {
						echo $cust['padd-summary'][0];
					} else {
						echo padd_theme_summary($post->post_content);
					}
					echo '</p>';
				?>
				<p class="readmore"><a href="<?php echo get_permalink($id); ?>">Read More</a></p>
			</div>
		</div>
		
		<?php 
			$id = intval(get_option(PADD_THEME_SLUG . '_post_2_page_id',1));
			$post = get_post($id); 
			$cust = get_post_custom($id);
		?>
		<div class="padd-post-item padd-post-item-index padd-post-item-index-page-2">
			<div class="padd-post-item-title">
				<h2><?php echo $post->post_title; ?></h2>
			</div>
			<div class="padd-post-item-entry">
				<?php 
					echo '<p>';
					if (!empty($cust['padd-summary'][0])) {
						echo $cust['padd-summary'][0];
					} else {
						echo padd_theme_summary($post->post_content);
					}
					echo '</p>';
				?>
				<p class="readmore"><a href="<?php echo get_permalink($id); ?>">Read More</a></p>
			</div>
		</div>
		
		<div class="padd-clear"></div>
		
	</div>
</div>

	</div>
</div>
<?php get_sidebar(); ?>

<div class="padd-clear"></div>	
		
<?php get_footer(); ?>