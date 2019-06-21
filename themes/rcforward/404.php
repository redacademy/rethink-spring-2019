<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<?php while (have_posts()): the_post();?>
	
	<section id="post-<?php the_ID();?>" <?php post_class();?>>
		<div class="content-404">
			<div class="background">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/output-onlinepngtools.png" alt="404 image">
			</div>
		
			<div class="content">
				<?php the_content();?>
			</div>
		</div>
	</section>

	<?php endwhile;?>

<?php get_footer(); ?>