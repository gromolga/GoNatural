<?php
$options = array();
$items = array();
$items[] = include "customizer/header.php";
$items[] = include "customizer/main.php";
$items[] = include "customizer/footer.php";

foreach ($items as $item) {
    $options = array_merge_recursive($options, $item);
}
