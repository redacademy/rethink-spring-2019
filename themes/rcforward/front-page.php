<?php
/**
 * The template for front page.
 * 
 * Template Name: Front Page
 *
 * @package RC Forward
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<header class="entry-header">
		<h2 class="entry-title"><?php echo CFS()->get('front_page_title') ?></h2>
		<p class="entry-title-description"><?php echo CFS()->get('front_page_description') ?></p>
		<a class="donate-page-button" href="<?php echo home_url(); ?>/donate">Donate</a>
		<a class="how-it-works-button" href="<?php echo home_url(); ?>/how-it-works">How It Works</a>
	</header>
	<?php get_template_part('template-parts/content', 'why-donate'); ?>
	<div class="choose-fund">
		<h3 class="choose-fund-title">Choose a Hight Impact Funds</h3>
		<p class="choose-fund-subtitle"><?php echo CFS()->get('front_page_choose_fund_subtitle') ?></p>
		<p class="choose-fund-description"><?php echo CFS()->get('front_page_choose_fund_description') ?></p>
		<section class="fund">

			<?php $args = array('post_type' => 'fund', 'posts_per_page'   => 3, 'order' => 'ASC');
			$fund_posts = get_posts($args); // returns an array of posts
			?>
			<?php foreach ($fund_posts as $post) : setup_postdata($post); ?>
				<div class="fund-entry">
					<h4> <?php echo CFS()->get('fund_name_short'); ?></h4>
					<img src="<?php echo CFS()->get('fund_icon'); ?>" alt="Fund Icon">
					<p class="fund-description"><?php echo CFS()->get('fund_description'); ?></p>
					<a class="learn-more-button" href="<?php echo get_the_permalink(); ?>">Learn More</a>
				</div>
			<?php endforeach;
		wp_reset_postdata(); ?>
		</section>
	</div>
	<div class="browse-charity">
		<h3 class="browse-charity-title">Give to High Impact Charities</h3>
		<p class="browse-charity-subtitle"><?php echo CFS()->get('front_page_browse_charities_subtitle'); ?></p>
		<p class="browse-charity-description"><?php echo CFS()->get('front_page_browse_charities_description'); ?></p>
		<?php get_template_part('template-parts/content', 'charities'); ?>
	</div>

	<?php get_template_part('template-parts/content', 'custom-plan'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>