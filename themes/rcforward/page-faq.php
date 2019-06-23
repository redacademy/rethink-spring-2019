<?php
/**
 * The template for displaying all pages.
 * 
 * Template Name: Page FAQ
 *
 * @package RC Forward
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">

			<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
			<?php the_content(); ?>

		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php $faqs = CFS()->get('faqs');
			foreach ($faqs as $faq) : ?>

				<div class="faqs">
					<div class="question">
						<p><?php echo $faq['question']; ?></p>
						<a id="plus-symbol" class="plus-symbol" href="#"><i class="fas fa-plus"></i></a>
					</div>
					<div class="answer">
						<p><?php echo $faq['answer']; ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
<?php endwhile;
?>

<?php get_footer(); ?>