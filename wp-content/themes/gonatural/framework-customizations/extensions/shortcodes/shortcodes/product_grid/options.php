<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'product_items' => array(
        'type' => 'addable-box',
        'label' => 'Список продуктов',
        'box-options' => array(
            'img' => array(
                'type' => 'upload',
                'label' => 'Изображение продукта',
                'images_only' => true,
                'files_ext' => array('png', 'jpeg', 'jpg', 'svg', 'gif'),
            ),
            'header' => array(
                'type' => 'textarea',
                'label' => 'Заголовок карточки продукта',
            ),
            'large_header' => array(
                'type' => 'textarea',
                'label' => 'Большой заголовок карточки продукта (в раскрывающемся блоке)',
            ),
            'text' => array(
                'type' => 'textarea',
                'label' => 'Основной текст (в раскрывающемся блоке)',
            ),
        ),
        'template' => '{{- header }}', // box title
    ),
);