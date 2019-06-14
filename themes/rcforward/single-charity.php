<?php
/**
 * The template for displaying all single charity.
 *
 * @package RC Forward
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php $charity_chimp_key = CFS()->get("charity_chimp_key"); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="charity-header">
            <div class="charity-image">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>
            </div>
                <?php
                $icon_url = CFS()->get("charity_icon");
                if ($icon_url) :
                ?>
                <div class="charity-icon-container">
                    <img class="charity-icon" src="<?php echo $icon_url; ?>" alt="the icon for the company" />
                </div>
                <?php endif; ?>
        </header><!-- .charity-header -->

        <main class="entry-content">
            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>

            <div class="amount-funded">
            <p>$ <?php echo CFS()->get( 'charity_amount_funded' );?></p>
            <p><?php echo CFS()->get( 'charity_amount_funded_description' );?></p>

            <!-- TO DO -->
            <button class="chimp-donate-form">Donate</button>
            </div>
            
            <div class="charity-description">
            <p><?php echo CFS()->get( 'charity_description' );?></p>
            </div>

            
            <?php $charity_video_url = CFS()->get( 'charity_video' );
            if($charity_video_url):?>
            <div class="charity-video">
                <p><?php echo $charity_video_url;?></p>
            </div>
            <?php endif; ?>

            <div class="main-content">
            <?php
                $charity_report_url= CFS()->get( 'charity_givewell_report_link' );
                $charity_report_button = '<a class="report-button" href="'.$charity_report_url.'">Givewell Report</a>';
                $charity_website_url= CFS()->get( 'charity_website_link' );
                $charity_website_button = '<a class="report-button" href="'.$charity_website_url.'">Charity Website</a>';
                $main_contents = CFS()->get( 'charity_main_content' );
                if($main_contents):
                $count=count($main_contents);
                $index=0;
                foreach ( $main_contents as $main_content ):
                    $index++;
            ?>
            <div class="single-content">
            <?php
                if($main_content['image'] && $index === $count):
            ?>      
                    <div class="content-image last-with-button">
                        <img  class="main-content-image" src="<?php  echo $main_content['image']; ?>">
                        <?php echo $charity_report_button; ?>
                        <?php echo $charity_website_button; ?>
                    </div>
	                    <h3 class =".content-w-image" ><?php echo $main_content['title']; ?></h3>
                        <p class =".content-w-image"><?php echo $main_content['content']; ?></p>
                <?php elseif($main_content['image'] && $index !== $count):?>
                    <div class="content-image">
                        <img  class="main-content-image" src="<?php  echo $main_content['image']; ?>">
                    </div>
                    <h3 class =".content-w-image" ><?php echo $main_content['title']; ?></h3>
                    <p class =".content-w-image"><?php echo $main_content['content']; ?></p>
                <?php elseif(!$main_content['image'] && $index !== $count):?>
                    <h3 class =".content-wo-image" ><?php echo $main_content['title']; ?></h3>
                    <p class =".content-wo-image"><?php echo $main_content['content']; ?></p>  
                <?php else: ?>
                    <h3 class =".content-wo-image" ><?php echo $main_content['title']; ?></h3>
                    <p class =".content-wo-image"><?php echo $main_content['content']; ?></p>
                    <?php echo $charity_report_button; ?>
                    <?php echo $charity_website_button; ?>    
                <?php endif; ?>
            </div>
                <?php endforeach; 
                    else:
                ?>
                <a class="contact-us-button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
                <?php endif;?>
                <!-- TO DO -->
                <button class="chimp-donate-form">Donate</button>

            </div>

            <h3 class="browse-charities-title">Browse Charities</h3>

            
            
        </main><!-- .entry-content -->
        
        <?php get_template_part( 'template-parts/content', 'custom-plan' ); ?>
        <?php get_template_part( 'template-parts/content', 'charities' ); ?>
    </article><!-- #post-## -->
    
    <?php endwhile; // End of the loop. ?>
    

<?php get_footer(); ?>