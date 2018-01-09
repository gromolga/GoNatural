<?php

return array(
    'blog_slider' => array(
        'type' => 'box',
        'title' => 'Слайдер на странице архива постов (UA)',
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
                        'label' => 'Заголовок слайда',
                        'value' => 'Як зрозумiти що у твого улюбленця харчова чутливiсть?'
                    ),
                    'blog_slide_btn' => array(
                        'type' => 'textarea',
                        'label' => 'Текст кнопки',
                        'value' => 'Читати статтю'
                    ),
                    'blog_slide_link' => array(
                        'type' => 'textarea',
                        'label' => 'Адрес ссылки'
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