<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php
$product_items = isset($atts["product_items"]) ? $atts["product_items"] : "main";
?>


<div class="product-grid">
    <div class="product-item">
        <img src="<?php echo gd_get_img('Cat-Kitten.png') ?>" alt="">
        <div class="product-item-header">Grain Free Kitten Food</div>
        <span class="product-item-more">More info</span>
    </div>

    <div class="product-item">
        <img src="<?php echo gd_get_img('Cat-Kitten.png') ?>" alt="">
        <div class="product-item-header">Grain Free Kitten Food</div>
        <span class="product-item-more">More info</span>
    </div>

    <div class="product-item">
        <img src="<?php echo gd_get_img('Cat-Kitten.png') ?>" alt="">
        <div class="product-item-header">Grain Free Kitten Food</div>
        <span class="product-item-more">More info</span>
    </div>

    <div class="product-item">
        <img src="<?php echo gd_get_img('Cat-Kitten.png') ?>" alt="">
        <div class="product-item-header">Grain Free Kitten Food</div>
        <span class="product-item-more">More info</span>
    </div>
</div>
