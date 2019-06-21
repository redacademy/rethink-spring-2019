<?php
/**
 * The template for displaying 404 pages (not found).
 * 
 * Template Name: 404 Page
 *
 * 
 *
 * @package RC Forward
 */
get_header();?>

    <?php while (have_posts()): the_post();?>

	    <section class="container-404" id="post-<?php the_ID();?>" <?php post_class();?>>

	            <div class="error-text">
    				<?php the_content();?>
				</div>
	          		 
				<div class="search-girl">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/output-onlinepngtools.png" alt="404 image">
				</div>
			
	    </section>

	    <?php endwhile;?>

<?php get_footer();?>
