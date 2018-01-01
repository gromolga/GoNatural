<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php

$img = isset($atts["img"]) ? $atts["img"] : "";
$header = isset($atts["header"]) ? $atts["header"] : "";
$txt = isset($atts["txt"]) ? $atts["txt"] : "";
?>

<div class="product-presentation">
    <div class="product-presentation-img">
        <img src="<?php echo wp_get_attachment_image( gd_get_array($img, "attachment_id" ), 'full') ?>" alt="">
    </div>
    <div class="product-presentation-txt">
        <h3 class="h3 product-presentation-header">
            <?php echo $header ?>
        </h3>
        <p>
            <?php echo $txt ?>
        </p>
    </div>
</div>




