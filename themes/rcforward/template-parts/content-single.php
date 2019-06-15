<?php
/**
 * Template part for displaying single posts.
 *
 * @package RC Forward
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-title">
		<p class ="entry-meta"><?php red_starter_posted_on(); ?><p>
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</div><!-- .entry-title -->

	<main class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</main><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
