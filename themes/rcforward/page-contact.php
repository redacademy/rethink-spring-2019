<?php
/**
 * The template for displaying all pages.
 * 
 * Template Name: Page Contact
 *
 * @package RC Forward
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<h4>We'd love to hear from you.</h4>
	
	<div class="contact-text">
		<p><strong>Questions, comments, feedback?</p></strong>
		<p><strong>Please don’t hesitate to get in touch.</p></strong>
	</div>

	<div class="entry-content"> 
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
