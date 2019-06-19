<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<?php if (is_active_sidebar('footer-sidebar')) : ?>
	<div id="footer-sidebar" class="footer-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar('footer-sidebar'); ?>
	</div><!-- #footer-sidebar -->
<?php endif; ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-site-logo">
		<a href="<?php echo home_url('/'); ?>" rel="home">
			<h2 class="rcforward-logo">Rc Forward</h2>
		</a>
	</div>
	<div class="footer-nav">
		<?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_id' => 'footer-menu')); ?>
	</div><!-- .footer-nav -->
	<div class="footer-info">
		<?php $front_page_id = get_option('page_on_front'); ?>
		<p><?php echo CFS()->get('footer_info', $front_page_id) ?></p>
		<img class="footer-maple-leaf" src="<?php echo CFS()->get('footer_info_icon', $front_page_id) ?>">
		<!-- Insert Icon -->
	</div><!-- .footer-info -->
	<div class="footer-info-sm">
		<div class="text-description">
			<p>RC Forward is a project of:</p>
			<img class="footer-info-logo" src="<?php echo CFS()->get('parent_charity_logo', $front_page_id); ?>">
			<p><?php echo CFS()->get('parent_charity_description', $front_page_id); ?></p>
		</div>
		<div class="font-link">
			<a class="mail" href="<?php echo CFS()->get('parent_charity_email', $front_page_id); ?>"></a>
			<a class="facebook" href="<?php echo CFS()->get('parent_charity_facebook_link', $front_page_id); ?>"></a>
			<!-- <i class="far fa-envelope fa-2x"></i> -->
			<!-- <i class="fab fa-facebook-f fa-2x"></i> -->
		</div>
	</div> <!-- .footer-info-sm -->
	<div class="footer-copyright">
		<p>Copyright 2019 &copy; Rethink Charity</p>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>