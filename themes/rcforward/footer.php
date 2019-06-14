<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->
<?php get_sidebar(); ?>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-nav">
		<?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_id' => 'footer-menu')); ?>
		<a href="<?php echo esc_url('https://wordpress.org/'); ?>"><?php printf(esc_html('Proudly powered by %s'), 'WordPress'); ?></a>
	</div><!-- .footer-nav -->
	<div class="footer-info">
		<?php $front_page_id = get_option('page-on-front'); ?>
		<p><?php echo CFS()->get('footer_info', $front_page_id) ?></p>
		<a href="<?php echo CFS()->get('footer_info_icon', $front_page_id) ?>"><!-- Insert Icon --></a>
	</div><!-- .footer-info -->
	<div class="footer-info-sm">
		<p>RC Forward is a project of:</p>
		<img src="<?php echo CFS()->get('parent_charity_logo', $front_page_id);?>">
		<p><?php echo CFS()->get('parent_charity_description', $front_page_id); ?></p>
		<a href="<?php echo CFS()->get('parent_charity_email', $front_page_id); ?>"></a>
		<a href="<?php echo CFS()->get('parent_charity_facebook_link', $front_page_id); ?>"></a>
	</div> <!-- .footer-info-sm -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>