<?php
/**
 * The template for displaying 404 pages (not found).
 * 
 * @package RC Forward
 */
get_header();?>

<div class="content-404">

<div class="image-404">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/output-onlinepngtools.png" alt="404 image"/>
</div>
<div class="error-text">
	<div class="hmmm">
		<h2 class="title-hummm">Hmmm</h2><h2 class="title-dots">....</h2>
</div>
	<p class="first-line mobile">We can't seem to </p>
	<p class="second-line mobile">find the page </p>	
	<p class="third-line mobile">you're looking for</p>
	<p class="first-line tablet">We can't seem to find the</p>	
	<p class="second-line tablet">page you're looking for</p>
	<p class="first-line desktop">We can't seem to find the page you're</p>
	<p class="second-line desktop">looking for</p>
</div>
</div>


<?php get_footer();?>
