<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'left_txt'  => array(
        'label' => "Текст перед продуктами",
        'type'  => 'textarea',
        'value' => ''
    ),
    'products' => array(
        'type' => 'addable-option',
        'label' => 'Изображения продуктов',
        'option' => array(
            'type' => 'upload',
            'label' => 'Картинка продукта',
            'images_only' => true,
            'files_ext' => array('png', 'jpeg', 'jpg', 'svg', 'gif'),
        ),
    ),
    'right_txt'  => array(
        'label' => "Текст перед кнопкой",
        'type'  => 'textarea',
        'value' => ''
    ),
    'btn_txt'  => array(
        'label' => "Текст кнопки",
        'type'  => 'text',
        'value' => ''
    ),
);