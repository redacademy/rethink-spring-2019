<?php
/**
 * The blog template file.
 * 
 * Template Name: Blog
 *
 * @package RC_Forward
 */

get_header(); ?>

<?php if (have_posts()) : ?>

	<header class="blog-header">
		<div class="impact-title">
			<h2 class="page-title">Impactfully Giving</h2>
			<p class="page-subtitle">Stories, Impact Updates and News</p>
		</div>

		<div class="impact-heart">
			<img class="impactfully" src="<?php echo get_template_directory_uri(); ?>/assets/images/Impactfullygiving.png">
		</div>	
	</header>

		<?php ?>
		<?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="1" order="ASC" scroll="false" transition_container="false" images_loaded="true" button_label="Load More" button_loading_label="Loading ..."]'); ?>
		<?php else : ?>
		<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>


<?php get_footer(); ?>