<?php
/**
 * The template for displaying all single posts.
 *
 * @package RC Forward
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>



<?php endwhile; // End of the loop. ?>



<?php get_footer(); ?>
