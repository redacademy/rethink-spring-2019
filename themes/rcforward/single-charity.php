<?php
/**
 * The template for displaying all single charity.
 *
 * @package RC Forward
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <?php $charity_chimp_key = CFS()->get("charity_chimp_key"); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="charity-header">
            <div class="charity-image">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>
            </div>
            <?php
            $logo_url = CFS()->get("charity_logo");
            if ($logo_url) :
                ?>
                <div class="charity-logo-container">
                    <img class="charity-logo" src="<?php echo $logo_url; ?>" alt="the logo for the company" />
                </div>
            <?php endif; ?>
        </header><!-- .charity-header -->

        <main class="entry-content">
            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>

            <div class="amount-funded">
                <p>$<span class="counter"> <?php echo CFS()->get('charity_amount_funded'); ?></span></p>
                <p><?php echo CFS()->get('charity_amount_funded_description'); ?></p>

                <button class="chimp-donate-form">Donate</button>
            </div>

            <div class="charity-description">
                <p><?php echo CFS()->get('charity_description'); ?></p>
            </div>


            <?php $charity_video_url = CFS()->get('charity_video');
            if ($charity_video_url) : ?>
                <div class="charity-video">
                    <?php echo $charity_video_url; ?>
                </div>
            <?php endif; ?>

            <div class="main-content">
                <?php
                $charity_report_url = CFS()->get('charity_givewell_report_link');
                $charity_report_button = '<a class="report-button" href="' . $charity_report_url . '">Givewell Report</a>';
                $charity_website_url = CFS()->get('charity_website_link');
                $charity_website_button = '<a class="report-button" href="' . $charity_website_url . '">Charity Website</a>';
                $main_contents = CFS()->get('charity_main_content');
                if ($main_contents) :
                    $count = count($main_contents);
                    $index = 0;
                    foreach ($main_contents as $main_content) :
                        $index++;
                        ?>
                        <div class="single-content ">
                            <?php
                            if ($main_content['image'] && $index === $count) :
                                ?>
                                <div class="main-image">
                                    <div class="image">
                                        <img class="main-content-image" src="<?php echo $main_content['image']; ?>">
                                    </div>
                                    <div class="link-charity hide-mobile">
                                        <?php echo $charity_report_button; ?>
                                        <?php echo $charity_website_button; ?>
                                    </div>
                                </div>

                                <div class="content-w-image">
                                    <div class="h3-title">
                                        <h3><?php echo $main_content['title']; ?></h3>
                                    </div>
                                    <div class="p-description">
                                        <p><?php echo $main_content['content']; ?></p>
                                        <div class="link-charity hide-desktop">
                                            <?php echo $charity_report_button; ?>
                                            <?php echo $charity_website_button; ?>
                                        </div>
                                    </div>

                                <?php elseif ($main_content['image'] && $index !== $count) : ?>

                                    <div class="main-image">
                                        <img class="main-content-image" src="<?php echo $main_content['image']; ?>">
                                    </div>
                                    <div class="content-w-image">
                                        <div class="h3-title">
                                            <h3><?php echo $main_content['title']; ?></h3>
                                        </div>
                                        <div class="p-description">
                                            <p><?php echo $main_content['content']; ?></p>
                                        </div>
                                    </div>

                                <?php elseif (!$main_content['image'] && $index !== $count) : ?>
                                    <div class="no-image">
                                        <div class="content-wo-image">
                                            <h3 class="content-wo-image"><?php echo $main_content['title']; ?></h3>
                                            <p class="content-wo-image"><?php echo $main_content['content']; ?></p>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="no-image">
                                        <h3 class="title-no-image"><?php echo $main_content['title']; ?></h3>
                                        <p class="content-wo-image"><?php echo $main_content['content']; ?></p>
                                        <div class="button-no-image">
                                            <?php echo $charity_report_button; ?>
                                            <?php echo $charity_website_button; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach;
                else :
                    ?>
                        <a class="contact-us-button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
                    <?php endif; ?>

                </div>
                <script type="text/javascript" src="https://chimp.net/widget/js/loader.js?<?php echo $charity_chimp_key; ?>" id="chimp-button-script" data-hide-button="true" data-script-id="main"> </script>
                <button class="chimp-donate-form">Donate</button>

        </main><!-- .entry-content -->

        <h3 class="browse-charities-title">Browse Charities</h3>
        <div class="charity-browse">
            <?php get_template_part('template-parts/content', 'charities'); ?>
        </div>
        <?php get_template_part('template-parts/content', 'custom-plan'); ?>
    </article><!-- #post-## -->

<?php endwhile; 
?>

<?php get_footer(); ?>