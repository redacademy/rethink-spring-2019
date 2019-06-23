<?php
/**
 * The template for displaying all single posts.
 *
 * @package RC Forward
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if (has_post_thumbnail()) : ?>
				<?php the_post_thumbnail('large'); ?>
			<?php endif; ?>
		</header><!-- .entry-header -->
		<article class="entry-content">
			<div class="entry-title">
				<p class="entry-meta"><?php red_starter_posted_on(); ?><p>
				<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
			</div><!-- .entry-title -->

			<div class="entry-main">
				<p class="post-intro"><?php echo CFS()->get('post-introduction') ?></p>
				<p class="post-quote"><?php echo CFS()->get('post-announcement') ?></p>
				<?php the_content(); ?>
				<?php
				wp_link_pages(array(
					'before' => '<div class="page-links">' . esc_html('Pages:'),
					'after'  => '</div>',
				));
				?>
			</div><!-- .entry-main -->

			<footer class="entry-footer">
				<?php red_starter_entry_footer(); ?>
			</footer><!-- .entry-footer -->
			</article><!-- .entry-content -->
		<div class="post-navigation">
			<h3 class="more-article">More Articles</h3>
			<div class="more-post">
				<?php
					$prev_post = get_previous_post();
					if (!empty($prev_post)) :
						$prev__id = $prev_post->ID; ?>
						<div class="previous-post">
							<p class="pre-nav-1"><?php echo $prev_post->post_title ?></p>
						<div class="prev-post-image">
							<?php if (has_post_thumbnail($prev__id)) : ?>
								<?php the_post_thumbnail($prev__id, 'large'); ?>
							<?php endif; ?>
						</div><!-- .prev-post-image -->
						<div class="prev-post-content">
							<div class="prev-post-title">
								<p class="prev-post-meta"><?php echo $prev_post->post_date; ?><p>
										<h3 class="entry-title"><?php echo $prev_post->post_title; ?></h3>
							</div><!-- .entry-title -->

							<div class="prev-post-main">
								<p class="prev-post-intro"><?php echo CFS()->get('post-introduction', $prev__id); ?></p>
								<p class="prev-post-quote"><?php echo CFS()->get('post-announcement', $prev__id); ?></p>
								<?php echo $prev_post->post_excerpt; ?>
							</div><!-- .entry-main -->

							</div>

							<div class="read-more">
								<a class="read-more-button" href="<?php echo $prev_post->guid ?>">Read More </a>
								<span class="read-more-arrow"> &#x203A; </span>
							</div>
						</div>
						<?php endif ?>
					
						<?php
						$next_post = get_next_post();
						if (!empty($next_post)) :
							$next_post_id = $next_post->ID;
							$post_introduction = CFS()->get('post-introduction', $next_post_id);
							$post_annoucement = CFS()->get('post-announcement', $next_post_id); ?>
								<div class="next-post">
							<p class="next"> <?php echo $next_post->post_title ?></p>
							<div class="next-post-image">
								<?php if (has_post_thumbnail($next_post_id)) : ?>
									<?php the_post_thumbnail($next_post_id, 'large'); ?>
								<?php endif; ?>
							</div><!-- .next-post-image -->
							<div class="next-post-content">
								<div class="next-post-title">
									<p class="next-post-meta"><?php echo $next_post->post_date; ?><p>
											<h3 class="entry-title"><?php echo $next_post->post_title; ?></h3>
								</div><!-- .entry-title -->

								<div class="next-post-main">
									<p class="next-post-intro"><?php echo $post_introduction; ?></p>
									<p class="next-post-quote"><?php echo $post_annoucement; ?></p>

									<!-- TODO if statment or post excert -->
									<!-- <?php if (!empty($post_introduction)) ?> -->

								<?php echo $next_post->post_excerpt; ?>
								</div><!-- .entry-main -->
						</div>

								<div class="read-more">
									<a class="read-more-button" href="<?php echo $next_post->guid ?>">Read More</a>
										<span class="read-more-arrow"> &#x203A; </span>
								</div>
							</div>
							<?php endif; ?>
							


					</div>
				</div>
		
						</main><!-- #post-## -->



<?php endwhile;
?>



<?php get_footer(); ?>