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


	<?php /* Start the Loop */ ?>
	<?php while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<section class="post-blog">
			<header class="entry-header">
				<?php if (has_post_thumbnail()) : ?>
				<?php the_post_thumbnail('large'); ?>
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-title">
<?php red_starter_posted_on(); ?>
				<?php the_title('<h3 class="entry-title"> ', '</h3>'); ?>
			</div><!-- .entry-title -->


			<div class="entry-content">
				<?php echo get_the_excerpt(); ?>
			</div>

			<div class="read-more">
				<a class="read-more-button" href="<?php echo get_the_permalink(); ?>">Read More </a>
				<span>&#x203A</span>
			</div>
		</section>
	</article><!-- #post-## -->

		
		<?php endwhile; ?>
			<?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="3" order="ASC" pause="true" scroll="false" transition_container="false" images_loaded="true" button_label="Load More" button_loading_label="Loading ..."]'); ?>
		<?php else : ?>
		<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>


<?php get_footer(); ?>