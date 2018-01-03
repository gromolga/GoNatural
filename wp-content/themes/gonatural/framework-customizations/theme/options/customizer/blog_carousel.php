<?php

return array(
    'blog_slider' => array(
        'type' => 'box',
        'title' => 'Слайдер на странице архива постов',
        'options' => array(
            'blog_slide' => array(
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
                        'label' => 'Заголовок слайда'
                    ),
                    'blog_slide_btn' => array(
                        'type' => 'textarea',
                        'label' => 'Текст кнопки слайда'
                    ),
                ),
                'template' => '{{- main_banner_slide_header }}', // box title
                'limit' => 50, // limit the number of boxes that can be added
                'add-button-text' => 'Добавить новый слайд',
                'sortable' => true,
            ),
        ),
    )
);