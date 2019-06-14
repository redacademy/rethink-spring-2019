<div class="custom-plan">
<?php
// TODO check method:
$pageID = get_option('page_on_front');
// echo $pageID;

$custom_plans = CFS()->get( 'front_page_custom_plan', 37 );
// var_dump($custom_plans);

if(isset($custom_plans)):
    echo 'the field has a loop';


foreach ( $custom_plans as $custom_plan ) :
    $chimp_key = $custom_plan['chimp_key'];
?>
    <div class="single-custom-plan">
        <img src="<?php  echo $custom_plan['icon']; ?>">
        <h3><?php echo $custom_plan['title'];?></h3>
        <p><?php echo $custom_plan['description'];?><p>
        <?php if($chimp_key): ?>
        <!-- TO DO -->
        <button class="chimp-donate-form">Donate</button>
        <?php else: ?>
        <a href="<?php echo home_url(); ?>/contact">Contact Us</a>
        <?php endif; ?>
    </div>

<?php endforeach; 

else:
    // echo 'no loop found';
?>

    <a href="<?php echo home_url(); ?>/contact">Contact Us</a>
<?php
endif;
?>

</div>