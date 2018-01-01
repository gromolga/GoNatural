<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header'  => array(
		'label' => "Заголовок секции",
		'desc'  => "Этот текст будет выведен в теге заголовка",
		'type'  => 'textarea',
		'value' => ''
	),
    'txt'  => array(
        'label'   => "Основной текст секции",
        'type' => 'wp-editor',
        'editor_height' => 300,
        'size' => 'small',
        'editor_type' => false,
    ),
    'img' => array(
        'type' => 'upload',
        'label' => 'Картинка продукта',
        'images_only' => true,
        'files_ext' => array('png', 'jpeg', 'jpg', 'svg', 'gif')
    ),
);