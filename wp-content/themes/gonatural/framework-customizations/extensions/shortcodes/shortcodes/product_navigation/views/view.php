<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php
/**
 * @var array $atts
 */

$left_txt = isset($atts["left_txt"]) ? $atts["left_txt"] : "";
$right_txt = isset($atts["right_txt"]) ? $atts["right_txt"] : "";
$btn_txt = isset($atts["btn_txt"]) ? $atts["btn_txt"] : "";
?>


<div class="product-navigation">
    <div class="product-navigation-left-col">
        <div class="product-navigation-left-col-txt">
            <?php echo $left_txt ?>
        </div>
        <div class="product-navigation-left-col-img">
            <?php $images = gd_get_array($atts,'products', array()) ?>
            <ul class="product-navigation-left-col-img-list">
            <?php foreach ($images as $img): ?>
                <li class="product-navigation-left-col-img-box">
                    <a href="#">
                        <?php echo wp_get_attachment_image( gd_get_array($img, "attachment_id" ), 'full') ?>
                    </a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="product-navigation-right-col">
        <div class="product-navigation-right-col-txt">
            <?php echo $right_txt ?>
        </div>
        <div class="product-navigation-right-col-btn">
            <a href="#"> <?php echo $btn_txt ?></a>
        </div>
    </div>
</div>
