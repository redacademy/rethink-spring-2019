<?php
/**
 * Template part for displaying why donate to RC Forward part.
 *
 * @package RC Forward
 */

?>

<div class="why-donate">
    <h3>Why Donate to RC Forward?</h3>
    <div class="why-donate-content">
<?php
// TODO check method:
$pageID = get_option('page_on_front');


$why_donates = CFS()->get( 'front_page_why_donate', $pageID );


if(isset($why_donate)):
    // echo 'the field has a loop';


foreach ( $why_donates as $why_donate ) :
    $chimp_key = $why_donate['chimp_key'];
?>
    <div class="single-reason">
        <img src="<?php  echo $why_donate['icon']; ?>">
        <p><?php echo $why_donate['reason_title'];?></p>
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
</div>