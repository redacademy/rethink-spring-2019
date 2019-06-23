<!-- To Do -->
<!-- add id to the browse all charities section: #browse-charities-button -->

<?php
/**
 * The template for displaying all pages.
 * 
 * Template Name: Page Donate
 *
 * @package RC Forward
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<header class="entry-header">
		<h2 class="entry-title"><?php echo CFS()->get('donate_page_title') ?></h2>
		<?php the_content(); ?>
	</header><!-- .entry-header -->
	<div class="choose-fund-background">
	<div class="choose-fund">
		<h3 class="choose-fund-title">Donate through RC Funds</h3>
		<p class="choose-fund-description mobile-version">Donate to charities identified by charity evaluators as the most effective at their causes</p>
		<section class="fund">
			<?php $args = array('post_type' => 'fund', 'posts_per_page'   => 3, 'order' => 'ASC');
			$fund_posts = get_posts($args); // returns an array of posts
			?>
			<?php foreach ($fund_posts as $post) : setup_postdata($post); ?>
				<div class="fund-entry">
					<img src="<?php echo CFS()->get('fund_icon'); ?>" alt="Fund Icon">
					<h4> <?php echo CFS()->get('fund_name_short'); ?></h4>
					<p class="fund-description desktop-version"><?php echo CFS()->get('fund_description'); ?></p>
					<a class="learn-more-button" href="<?php echo get_the_permalink(); ?>">Learn More</a>
				</div>
			<?php endforeach;
		wp_reset_postdata(); ?>
		</section>
	</div>
	</div>

	<div class="choose-charity-category" id="browse-charities-button">
	<h3 class="choose-charity-title desktop-version">Choose a cause area</h3>
	<h3 class="choose-charity-title mobile-version">Donate through specific charities</h3>
	<p class="choose-charity-subtitle desktop-version">Select a category below: </p>
	<div class="cause-areas">
	<?php
			$terms = get_terms(
				array(
					'taxonomy' => 'charity_tax',
					'hide_empty' => 0
				)
			);
	?>
	<?php foreach ($terms as $term) : ?>
			<button class="charity-tax <?php echo $term->slug;?>" value="<?php echo $term->name;?>"><?php echo $term->name; ?></button>
	<?php endforeach; ?>
	<button class="charity-tax see-all" value="see all">See All</button> 
	</div>
	<div class="show-results">

	</div>
	<div class="show-charities">
	</div>




	<!-- TODO -->

	</div>


	<?php get_template_part('template-parts/content', 'custom-plan'); ?>

<?php endwhile; // End of the loop. ?>



<?php get_footer(); ?>
