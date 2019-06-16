<?php
/**
 * The template for displaying all pages.
 * 
 * Template Name: Page How It Works
 *
 * @package RC Forward
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		<p class="page-description"><?php echo CFS()->get('how_it_works_page_description') ?></p>
		<div class="how-it-works-steps">
		<?php 
		$work_steps = CFS()->get( 'how_it_works' );
		foreach ( $work_steps as $work_step ) :
		?>

		<div class="work-step">
		<img class="work-step-icon" src="<?php echo $work_step['icon']; ?>" alt="Step Icon"/>	
		<p class = "work-step-title"><?php echo $work_step['title']; ?></p>
		<p class = "work-step-description"><?php echo $work_step['description']; ?></p>
		</div>
		<?php endforeach; ?>

		<div class="entry-donate-page">
		<p class="get-started">Get Started!</p>
		<a class="donate-page-button" href="<?php echo home_url(); ?>/donate">Donate</a>
		</div>
		</div>
	</header><!-- .entry-header -->
	<div class="entry-contact-us">
		<p>Contact us to discuss any other custom giving need or if you have questions?</p>
		<a class="contact-us-button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
	</div>
	<div class="entry-main">

		<?php the_content(); ?>



	</div>
	<?php get_template_part( 'template-parts/content', 'why-donate' ); ?>
	<?php get_template_part( 'template-parts/content', 'charities' ); ?>
	<?php get_template_part( 'template-parts/content', 'page' ); ?>

<?php endwhile; // End of the loop. ?>




<?php get_footer(); ?>
