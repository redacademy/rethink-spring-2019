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
				<div class="image-404">
					<img> 
				</div>

				<div class="page-content">
					<h1 class="page-title"><?php echo esc_html( 'Hmmmm....' ); ?></h1>
					<p><?php echo esc_html( 'We cannot seem to find the page your looking for'); ?></p>
				</div>
			</section>
<?php get_footer(); ?>
