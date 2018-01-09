<?php
$options = array();
$items = array();
$items[] = include "customizer/header.php";
$items[] = include "customizer/main.php";
//$items[] = include "customizer/main_ru.php";
$items[] = include "customizer/footer.php";
$items[] = include "customizer/blog_carousel.php";
$items[] = include "customizer/blog_carousel_ru.php";

foreach ($items as $item) {
    $options = array_merge_recursive($options, $item);
}
