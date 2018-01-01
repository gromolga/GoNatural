<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'header'  => array(
        'label' => "Текст баннера",
        'type'  => 'textarea',
        'value' => ''
    ),
    'img' => array(
        'type' => 'upload',
        'label' => 'Фоновое изображение баннера',
        'images_only' => true,
        'files_ext' => array('png', 'jpeg', 'jpg', 'svg', 'gif'),
    ),
);