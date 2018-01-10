<?php

return array(
    'our_products_ru' => array(
        'type' => 'box',
        'title' => 'Секция продуктов (RU)',
        'options' => array(
            'our_products_header_ru' => array(
                'type' => 'text',
                'label' => 'Заголовок',
                'value' => 'Наши продукты'
            ),
            'our_products_items_ru' => array(
                'type' => 'addable-box',
                'value' => array(
                    array(
                        'txt' => 'Они могут быть свежее, только если вы приготовите их собственноручно.',
                        'hover_txt' => 'NOW FRESH™ Мы наполнили NOW FRESH полезными ингридиентами, такими как свежее 
                        мясо и рыба, свежие масла омега 3 и омега 6 и масло кокосовых орехов. Исключительно беззерновой корм.',
                    ),
                    array(
                        'txt' => 'Решение для уникальных диетических потребностей вашего воспитанника',
                        'hover_txt' => 'Высокое содержание белка, уникальные рецепты сформированные для животных с повышенной
                        пищевой чувствительностью, рецепты, обеспечивающие прифилактический уход.',
                    ),
                ),
                'label' => 'Пункты списка',
                'box-options' => array(
                    'img' => array(
                        'type' => 'upload',
                        'label' => 'Изображение продукта',
                        'images_only' => true,
                        'files_ext' => array('png', 'jpeg', 'jpg', 'svg', 'gif'),
                    ),
                    'bg' => array(
                        'type' => 'upload',
                        'label' => 'Фон продукта',
                        'images_only' => true,
                        'files_ext' => array('png', 'jpeg', 'jpg', 'svg', 'gif'),
                    ),
                    'bg-color' => array(
                        'type' => 'text',
                        'label' => 'Фоновый цвет продукта',
                        'help'  => __('Цвет задается в шестнадцатиричном формате (см: https://colorscheme.ru/html-colors.html))', '{domain}'),
                        'value' => '#000'
                    ),
                    'txt' => array(
                        'type' => 'wp-editor',
                        'label' => 'Описание продукта',
                        'editor_height' => 300,
                        'size' => 'small',
                        'editor_type' => false,
                    ),
                    'hover_header' => array(
                        'type' => 'text',
                        'label' => 'Заголовок продукта, появляющийся при наведении',
                    ),
                    'hover_txt' => array(
                        'type' => 'wp-editor',
                        'label' => 'Описание продукта, появляющееся при наведении',
                        'editor_height' => 300,
                        'size' => 'small',
                        'editor_type' => false,
                    ),
                    'dogs_link' => array(
                        'type' => 'text',
                        'label' => 'Ссылка на страницу продукта для собак',
                    ),
                    'cats_link' => array(
                        'type' => 'text',
                        'label' => 'Ссылка на страницу продукта для котов',
                    ),
                ),
                'template' => '{{- hover_header }}', // box title
                'limit' => 50, // limit the number of boxes that can be added
            ),
        ),
    ),
);