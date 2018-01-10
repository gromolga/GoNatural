<?php

return array(
    'footer-section' => array(
        'type' => 'box',
        'options' => array(
            'footer-social' => array(
                'type' => 'addable-box',
                'label' => 'Социальные иконки',
                'box-options' => array(
                    'link' => array(
                        'type'  => 'textarea',
                        'label' => 'Ссылка переводящая на страничку в соцсети'
                    ),
                    'img' => array(
                        'type'  => 'text',
                        'help'  => __('Иконка задается в формате fa-facebook, иконки находятся по ссылке: http://fontawesome.io/icons/', '{domain}'),
                        'label' => 'Иконка соцсети'
                    ),
                ),
                'template' => '{{- img }}', // box title
                'limit' => 20, // limit the number of boxes that can be added
            ),
        ),
        'title' => 'Социальные иконки футера',
    ),
);