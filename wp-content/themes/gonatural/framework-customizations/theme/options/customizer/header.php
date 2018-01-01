<?php

return array(
    'header_section' => array(
        'type' => 'box',
        'options' => array(
            'header_logo' => array(
                'type'  => 'upload',
                'label' => 'Логотип шапки сайта',
                'images_only' => true,
                'files_ext' => array('png', 'jpeg', 'jpg', 'svg', 'gif'),
            ),
            'header_top_img' => array(
                'type'  => 'upload',
                'label' => 'Верхнее изображение',
                'images_only' => true,
                'files_ext' => array('png', 'jpeg', 'jpg', 'svg', 'gif'),
            ),
        ),
        'title' => 'Шапка сайта',
    )
);
