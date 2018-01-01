<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php
/**
 * @var array $atts
 */

$header = isset($atts["header"]) ? $atts["header"] : "";
$img = isset($atts["img"]) ? $atts["img"] : "";
?>

<div class="product-banner" style="background-image: url(<?php echo wp_get_attachment_image( gd_get_array($img, "attachment_id" ), 'full') ?>);">
    <div class="fw-container">
        <div class="fw-row">
            <div class="fw-col-xs-12">
                <div class="product-banner-txt">
                    <h1 class="h1 product-banner-txt-header">
                        <?php echo $header ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

