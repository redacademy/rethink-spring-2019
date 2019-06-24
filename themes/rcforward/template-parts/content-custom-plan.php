<?php
/**
 * Template part for displaying custom plan and donate to RC Forward.
 *
 * @package RC Forward
 */

?>

<div class="custom-plan">
<?php
// TODO check method:
$pageID = get_option('page_on_front');
// echo $pageID;

$custom_plans = CFS()->get( 'front_page_custom_plan', $pageID );
// var_dump($custom_plans);

if(isset($custom_plans)):
    // echo 'the field has a loop';


foreach ( $custom_plans as $custom_plan ) :
    $chimp_key = $custom_plan['chimp_key'];
?>
    <div class="single-custom-plan">
        <img src="<?php  echo $custom_plan['icon']; ?>">
        <h3><?php echo $custom_plan['title'];?></h3>
        <p><?php echo $custom_plan['description'];?></p>
        <div>
        <?php if($chimp_key): ?>
        <script type="text/javascript" src="https://chimp.net/widget/js/loader.js?<?php echo $chimp_key;?>" id="chimp-button-script" data-hide-button="true" data-script-id="main"> </script>
        <button class="chimp-donate-form">Donate</button>
        <?php else: ?>
        <a href="<?php echo home_url(); ?>/contact">Contact Us</a>
        <?php endif; ?>
    </div>
    </div>

<?php endforeach; 

else:
    // echo 'no loop found';
?>

    <a class="contact-us-button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
<?php
endif;
?>

</div>