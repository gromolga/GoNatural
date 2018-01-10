<?php

return array(
    'footer-top-section' => array(
        'type' => 'box',
        'options' => array(
            'footer-top-items' => array(
                'type' => 'addable-box',
                'label' => 'Пункты списка',
                'box-options' => array(
                    'img' => array(
                        'type' => 'upload',
                        'label' => 'Изображение',
                        'images_only' => true,
                        'files_ext' => array('png', 'jpeg', 'jpg', 'svg', 'gif'),
                    ),
                    'header' => array(
                        'type'  => 'textarea',
                        'label' => 'Заголовок пункта списка'
                    ),
                    'link-front' => array(
                        'type'  => 'textarea',
                        'label' => 'Текст ссылки'
                    ),
                    'link-back' => array(
                        'type'  => 'textarea',
                        'label' => 'Адрес ссылки'
                    ),
                ),
                'template' => '{{- header }}', // box title
                'limit' => 20, // limit the number of boxes that can be added
            ),
        ),
        'title' => 'Содержимое предфутера (UA)',
    ),
);