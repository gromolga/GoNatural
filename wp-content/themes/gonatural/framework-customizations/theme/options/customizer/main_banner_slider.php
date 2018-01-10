<?php

return array(
    'main_banner_slider' => array(
        'type' => 'box',
        'title' => 'Слайдер на главной странице (UA)',
        'options' => array(
            'main_banner_slide' => array(
                'type' => 'addable-box',
                'label' => 'Содержимое слайдов',
                'box-options' => array(
                    'main_banner_img' => array(
                        'type' => 'upload',
                        'label' => 'Изображение слайда',
                        'images_only' => true,
                        'files_ext' => array('png', 'jpeg', 'jpg', 'svg', 'gif'),
                    ),
                    'main_banner_slide_header' => array(
                        'type' => 'textarea',
                        'label' => 'Заголовок слайда'
                    ),
                    'main_banner_slide_btn' => array(
                        'type' => 'textarea',
                        'label' => 'Текст кнопки слайда'
                    ),
                    'main_banner_link' => array(
                        'type' => 'textarea',
                        'label' => 'Ссылка на желаемую страницу'
                    ),
                ),
                'template' => '{{- main_banner_slide_header }}', // box title
                'limit' => 50, // limit the number of boxes that can be added
                'add-button-text' => 'Добавить новый слайд',
                'sortable' => true,
            ),
        ),
    ),
);