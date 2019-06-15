<?php
/**
 * Template part for displaying all the charities in the carousole.
 *
 * @package RC Forward
 */

?>
<div id="charities-caresole" class="charities-caresole">
<?php $args = array('post_type' => 'charity', 'order' => 'ASC');
				$charity_posts = get_posts($args); // returns an array of posts
				?>
				<?php foreach ($charity_posts as $post) : setup_postdata($post); ?>
					<a class="single-charity" href="<?php echo get_the_permalink(); ?>">
                        <div class="thumbnail-wrapper">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                            <?php 
                                
                                $charity_logo= CFS()->get( 'charity_logo');
                            if ($charity_logo) : ?>
                                <div class="charity-logo"><img src="<?php echo $charity_logo; ?>" alt="Charity logo"/></div>
                            <?php endif; ?>

                        </div>
                        
						<div class="post-title">
							<p><?php the_title(); ?></p>
						</div>
                    </a>
                    <?php endforeach;
			wp_reset_postdata(); ?>
                    <a class="browse_charities_button" href="<?php echo get_the_permalink(); ?>/donate/#browse-charities-button">Browse All Charities</a>
</div> 