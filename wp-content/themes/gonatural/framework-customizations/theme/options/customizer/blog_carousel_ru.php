<?php

return array(
    'blog_slider_ru' => array(
        'type' => 'box',
        'title' => 'Слайдер на странице архива постов (RU)',
        'options' => array(
            'blog_slide_ru' => array(
                'type' => 'addable-box',
                'label' => 'Содержимое слайдов',
                'box-options' => array(
                    'blog_slide_img' => array(
                        'type' => 'upload',
                        'label' => 'Изображение слайда',
                        'images_only' => true,
                        'files_ext' => array('png', 'jpeg', 'jpg', 'svg', 'gif'),
                    ),
                    'blog_slide_header' => array(
                        'type' => 'textarea',
                        'label' => 'Ищете помощь в выборе правильного питания?'
                    ),
                    'blog_slide_btn' => array(
                        'type' => 'textarea',
                        'label' => 'Нажмите для перехода'
                    ),
                ),
                'template' => '{{- blog_slide_header }}', // box title
                'limit' => 50, // limit the number of boxes that can be added
                'add-button-text' => 'Добавить новый слайд',
                'sortable' => true,
            ),
        ),
    )
);