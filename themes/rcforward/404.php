<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RC Forward
 */

get_header(); ?>
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Hmmmm....' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo esc_html( 'We cannot seem to find the page your looking for'); ?></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
<?php get_footer(); ?>
