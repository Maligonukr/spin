<?php

return [
    'general' => [
        'label' => '',
        'sections' => [
            'main' => [
                'fields' => [
                    'useWpBodyOpen' => [
                        'label' => sprintf(
                            esc_html__('Use hook %s', 'lwpsc'),
                            '<code>wp_body_open</code>'
                        ),
                        'widget' => 'checkbox',
                        'params' => [
                            'checkboxOptions' => [
                                'label' => esc_html__('Enable', 'lwpsc'),
                            ],
                        ],
                        'desc' => sprintf(
                            esc_html__('Check if your theme support hook %s', 'lwpsc'),
                            '<code>wp_body_open</code>'
                        ),
                        'default' => false,
                    ],
                ],
            ],
        ],
    ],
];
