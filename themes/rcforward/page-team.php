<?php
/**
 * The template for displaying all pages.
 * 
 * Template Name: Page Team
 *
 * @package RC Forward
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<header class="entry-header">
	<?php the_title('<h2 class="page-title">', '</h2>'); ?>
	<?php the_content(); ?>
</header>

<div class="entry-content">
	<?php $members = CFS()->get( 'team_members');
	foreach ( $members as $member ) :?>

    <div class="single-member">
		<div class="member-photo">
		<img src="<?php echo $member['profile_photo']; ?>">
		</div>
		<div class="member-info">
			<h3><?php echo $member['members_names'];?></h3>
			<p><?php echo $member['description'];?></p>
		</div>
		<div class="contact-button">
			<a mailto="<?php echo $member['email_address']; ?>">Contact</a>
		</div>
    </div>

<?php endforeach; ?>
</div>
			
<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
