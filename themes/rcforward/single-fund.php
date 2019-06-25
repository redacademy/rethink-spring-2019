<?php
/**
 * The template for displaying all single fund.
 *
 * @package RC forward
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <?php $fund_chimp_key = CFS()->get("fund_chimp_key"); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="fund-header">
            <div class="fund-image">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>
            </div>
                <?php
                $icon_url = CFS()->get("fund_icon");
                if ($icon_url) :
                ?>
                <div class="fund-icon-container">
                    <img class="fund-icon" src="<?php echo $icon_url; ?>" alt="the icon for the fund" />
                </div>
                <?php endif; ?>
        </header><!-- .fund-header -->

        <main class="entry-content">
            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>

            <div class="amount-funded">
            <p>$<span class="counter"> <?php echo CFS()->get( 'fund_amount_funded' );?></span></p>
            <p><?php echo CFS()->get( 'fund_amount_funded_description' );?></p>

            
            <button class="chimp-donate-form">Donate</button>
            </div>

            <div class="fund-description">
            <p><?php echo CFS()->get( 'fund_description' );?></p>
            </div>

            
            <?php $fund_video_url = CFS()->get( 'fund_video' );
            if($fund_video_url):?>
            <div class="fund-video">
                <p><?php echo $fund_video_url;?></p>
            </div>
            <?php endif; ?>

            <div class="main-content">
              <div class="fund-allowcation">
                <h3><?php echo CFS()->get('fund_allocation_title'); ?></h3>
                <div class="fund-allowcations">
                <?php 
                $fund_allocations = CFS() -> get("fund_each_allocation_information");
                if(isset($fund_allocations)):
                foreach ($fund_allocations as $fund_allocation):
                ?>
                <div class="single-allocation">
                    <img class="charity-logo" src="<?php echo $fund_allocation['charity_full_logo']; ?>" alt="Charity logo">
                <div class="allocation-text">
                    <p class="percentage"><?php echo $fund_allocation['allocation_percentage']; ?></p>
                    <p class="description"><?php echo $fund_allocation['allocation_description']; ?></p>
                </div><!-- .allocation-text -->
                </div><!-- .single-allocation -->
                <?php endforeach;?>
                <?php else: ?>
                <a class="contact-us-button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
                <?php endif; ?>
                </div><!-- .fund-allowcations -->
              </div><!-- .fund-allowcation -->
              <div class="entry-content">
                <?php the_content(); ?>
            </div>
            
                
            <script type="text/javascript" src="https://chimp.net/widget/js/loader.js?<?php echo $fund_chimp_key;?>" id="chimp-button-script" data-hide-button="true" data-script-id="main"> </script>
                <button class="chimp-donate-form">Donate</button>
             
            </div><!-- .entry-content -->

            </div> <!-- .main-content -->
            

            <h3 class="related-charities-title">Related Charities</h3>
            <div class="related-charities">
            <?php
$related_charities = CFS()->get( 'fund_related_charities' );
// var_dump($related_charities);
foreach( $related_charities as $post_id ):
    $the_post = get_post( $post_id );
    ?>
    <div class="sigle-related-charity carousel-cell"> 
    <div class="charity-logo-container">
    <img class="charity-logo" src="<?php echo CFS()->get( 'charity_logo', $the_post->ID ); ?>"/>
    </div>
    <?php $charity_description = CFS()->get( 'charity_description', $the_post->ID ,array( 'format' => 'raw' )); ?>
    <!-- <?php var_dump($charity_description); ?> -->
    <p class="charity-description"><?php echo wp_trim_words($charity_description, 18, " [...]"); ?></p>
    <a class="read-more-button" href="<?php echo $the_post->guid; ?>">View Charity &#x203A;</a>
</div>

<?php endforeach; ?>
        </div>

 <!-- <?php var_dump($charity_description); ?> -->
    
        </main>
        
        <?php get_template_part( 'template-parts/content', 'custom-plan' ); ?>
    </article>
	<?php endwhile; ?>
<?php get_footer(); ?>
