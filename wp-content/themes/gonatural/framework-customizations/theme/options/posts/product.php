<?php

$options = array(
    'product' => array(
        'type' => 'box',
        'title' => 'UA',
        'options' => array(
            'products_navigation' => array(
                'type' => 'box',
                'title' => 'Верхняя линия навигации продуктов',
                'options' => array(
                    'left_txt' => array(
                        'type' => 'text',
                        'label' => 'Текст левой колонки',
                        'value' => 'Види продуктiв:'
                    ),
                    'img_items' => array(
                        'type' => 'addable-box',
                        'label' => 'Пункты списка',
                        'box-options' => array(
                            'img' => array(
                                'type' => 'upload',
                                'label' => 'Изображение продукта',
                                'images_only' => true,
                                'files_ext' => array('png', 'jpeg', 'jpg', 'svg', 'gif'),
                            ),
                        ),
                        'template' => 'Картинка продукта', // box title
                    ),
                    'right_txt' => array(
                        'type' => 'text',
                        'label' => 'Текст правой колонки',
                        'value' => 'Потрiбна порада у виборi правильного харчування?'
                    ),
                    'button_txt' => array(
                        'type' => 'text',
                        'label' => 'Текст кнопки',
                        'value' => 'Скористайтеся нашим помiчником'
                    ),
                ),
            ),
            'products_content' => array(
                'type' => 'box',
                'title' => 'Верхняя линия навигации продуктов',
                'options' => array(
                    'small_header' => array(
                        'type' => 'text',
                        'label' => 'Маленький заголовок продукта',
                        'value' => 'SUMMIT'
                    ),
                    'large_header' => array(
                        'type' => 'text',
                        'label' => 'Большой заголовок продукта',
                        'value' => 'THREE MEAT INDOOR CAT RECIPE'
                    ),
                    'content' => array(
                        'type' => 'wp-editor',
                        'label' => 'Описание продукта',
                        'editor_height' => 300,
                        'size' => 'small',
                        'editor_type' => false,
                    ),
                ),
            ),
            'accordeon' => array(
                'type' => 'box',
                'title' => 'Аккордеон',
                'options' => array(
                    'items' => array(
                        'type' => 'addable-box',
                        'label' => 'Пункты списка',
                        'box-options' => array(
                            'header' => array(
                                'type' => 'text',
                                'label' => 'Заголовок строчки аккордеона'
                            ),
                            'text' => array(
                                'type' => 'wp-editor',
                                'label' => 'Выпадающий текст строчки аккордеона',
                                'editor_height' => 300,
                                'size' => 'small',
                                'editor_type' => false
                            ),
                        ),
                        'template' => '{{- header }}', // box title
                        'help'  => __('Всего можно ввести не более четырех продуктов', '{domain}'),
                        'limit' => 4, // limit the number of boxes that can be added
                    ),
                ),
            ),
        )
    ),
    'product_ru' => array(
        'type' => 'box',
        'title' => 'RU',
        'options' => array(
            'products_navigation' => array(
                'type' => 'box',
                'title' => 'Верхняя линия навигации продуктов',
                'options' => array(
                    'left_txt_ru' => array(
                        'type' => 'text',
                        'label' => 'Текст левой колонки',
                        'value' => 'Види продуктiв:'
                    ),
                    'img_items_ru' => array(
                        'type' => 'addable-box',
                        'label' => 'Пункты списка',
                        'box-options' => array(
                            'img' => array(
                                'type' => 'upload',
                                'label' => 'Изображение продукта',
                                'images_only' => true,
                                'files_ext' => array('png', 'jpeg', 'jpg', 'svg', 'gif'),
                            ),
                        ),
                        'template' => 'Картинка продукта', // box title
                    ),
                    'right_txt_ru' => array(
                        'type' => 'text',
                        'label' => 'Текст правой колонки',
                        'value' => 'Потрiбна порада у виборi правильного харчування?'
                    ),
                    'button_txt_ru' => array(
                        'type' => 'text',
                        'label' => 'Текст кнопки',
                        'value' => 'Скористайтеся нашим помiчником'
                    ),
                ),
            ),
            'products_content' => array(
                'type' => 'box',
                'title' => 'Верхняя линия навигации продуктов',
                'options' => array(
                    'small_header_ru' => array(
                        'type' => 'text',
                        'label' => 'Маленький заголовок продукта',
                        'value' => 'SUMMIT'
                    ),
                    'large_header_ru' => array(
                        'type' => 'text',
                        'label' => 'Большой заголовок продукта',
                        'value' => 'THREE MEAT INDOOR CAT RECIPE'
                    ),
                    'content_ru' => array(
                        'type' => 'wp-editor',
                        'label' => 'Описание продукта',
                        'editor_height' => 300,
                        'size' => 'small',
                        'editor_type' => false,
                    ),
                ),
            ),
            'accordeon' => array(
                'type' => 'box',
                'title' => 'Аккордеон',
                'options' => array(
                    'items_ru' => array(
                        'type' => 'addable-box',
                        'label' => 'Пункты списка',
                        'box-options' => array(
                            'header' => array(
                                'type' => 'text',
                                'label' => 'Заголовок строчки аккордеона'
                            ),
                            'text' => array(
                                'type' => 'wp-editor',
                                'label' => 'Выпадающий текст строчки аккордеона',
                                'editor_height' => 300,
                                'size' => 'small',
                                'editor_type' => false
                            ),
                        ),
                        'template' => '{{- header }}', // box title
                        'help'  => __('Всего можно ввести не более четырех продуктов', '{domain}'),
                        'limit' => 4, // limit the number of boxes that can be added
                    ),
                ),
            ),
        )
    )

);