<?php

return array(
    'our_products' => array(
        'type' => 'box',
        'title' => 'Секция продуктов (UA)',
        'options' => array(
            'our_products_header' => array(
                'type' => 'text',
                'label' => 'Заголовок',
                'value' => 'Наші продукти'
            ),
            'our_products_items' => array(
                'type' => 'addable-box',
                'value' => array(
                    array(
                        'txt' => 'Сертифіковані та органічні інгредієнти, що виробляються на постійній основі',
                        'hover_txt' => 'GATHER ™ GATHER допомагає тримати своїх домашніх улюбленців здоровими, щасливими 
                        та задоволеними життям, використовуючи виключно натуральні інгрідієнти з землі та океанів та
                        не додаваючи нічого зайвого. Ми зібрали, вам сподобається.',
                    ),
                    array(
                        'txt' => 'Вони можуть бути свіжіші, тільки якщо ви зробите їх власноруч',
                        'hover_txt' => 'NOW FRESH™ Ми зробили NOW FRESH наповненим поживними інгредієнтами, такими як 
                        свіже м\'ясо або риба, а також свіжі масла омега 3 та 6 з кокосових горіхів та ріпаку. Виключно 
                        беззерновий корм.',
                    ),
                    array(
                        'txt' => 'Рішення для унікальних дієтичних потреб вашого вихованця',
                        'hover_txt' => 'Високий вміст білку, унікальні рецепти, сформовані для тварин з 
                        чутливістю до їжі і рецепти, що забезпечують профілактичний догляд.',
                    ),
                    array(
                        'txt' => 'Корисне харчування для абсолютного здоров\'я',
                        'hover_txt' => 'Створено з використанням найкращих та найбільш відповідних 
                        інгредієнтів для здорового вжитку, без шкоди для смаку.',
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