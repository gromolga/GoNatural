<?php
$options = array();
$items = array();
$items[] = include "customizer/header.php";
$items[] = include "customizer/main_banner_slider.php";
$items[] = include "customizer/main_banner_slider_ru.php";
$items[] = include "customizer/our_blog.php";
$items[] = include "customizer/our_blog_ru.php";
$items[] = include "customizer/our_products.php";
$items[] = include "customizer/our_products_ru.php";
$items[] = include "customizer/sub_footer.php";
$items[] = include "customizer/sub_footer_ru.php";
$items[] = include "customizer/footer.php";
$items[] = include "customizer/blog_carousel.php";
$items[] = include "customizer/blog_carousel_ru.php";

foreach ($items as $item) {
    $options = array_merge_recursive($options, $item);
}
