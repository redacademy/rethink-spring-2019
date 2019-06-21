<?php
/**
 * Template part for displaying all the charities in the carousole.
 *
 * @package RC Forward
 */

?>
<div id="charities-caresole" class="charities-caresole main-carousel">
<?php $args = array('post_type' => 'charity','posts_per_page'   => -1, 'order' => 'ASC');
				$charity_posts = get_posts($args); // returns an array of posts
				?>
                <?php foreach ($charity_posts as $post) : setup_postdata($post); ?>
                
					<a class="single-charity carousel-cell" href="<?php echo get_the_permalink(); ?>">
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
                            <?php $charity_name=CFS()->get('charity_name');
                            if($charity_name):?>
                            <p class="post-name"><?php echo $charity_name?>
                            <?php else: ?>
                            <p class="post-name"><?php the_title(); ?></p>
                            <?php endif ?>
                        </div>
                        
                    </a>
                    <?php endforeach;
			wp_reset_postdata(); ?>
                    
</div> 
<div class="browse_charities_button">
<a href="<?php echo get_the_permalink(); ?>/donate/#browse-charities-button">Browse All Charities</a>
</div>