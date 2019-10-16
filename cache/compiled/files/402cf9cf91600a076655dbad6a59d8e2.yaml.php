<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/inurb/user/themes/quark/blueprints/modular/complex.yaml',
    'modified' => 1571259755,
    'data' => [
        'title' => 'Complex',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.media_order' => [
                                    'label' => 'Page Media (first one will be displayed next to your content)'
                                ],
                                'header.image_align' => [
                                    'type' => 'select',
                                    'label' => 'Image position',
                                    'classes' => 'fancy',
                                    'default' => 'left',
                                    'options' => [
                                        'left' => 'Left',
                                        'right' => 'Right'
                                    ]
                                ]
                            ]
                        ],
                        'complex' => [
                            'type' => 'tab',
                            'title' => 'Complex',
                            'fields' => [
                                'header.classes' => [
                                    'type' => 'text',
                                    'label' => 'Classes',
                                    'markdown' => true,
                                    'description' => 'There are several Hero class options that can be listed here (space separated):<br />`text-light`, `text-dark`, `title-h1h2`, `parallax`, `overlay-dark-gradient`, `overlay-light-gradient`, `overlay-dark`, `overlay-light`, `hero-fullscreen`, `hero-large`, `hero-medium`, `hero-small`, `hero-tiny`<br />Please consult the [Quark documentation](https://github.com/getgrav/grav-theme-quark#hero-options) for more details.'
                                ],
                                'header.complex' => [
                                    'name' => 'complex',
                                    'type' => 'list',
                                    'label' => 'Complex',
                                    'fields' => [
                                        '.item_class' => [
                                            'type' => 'text',
                                            'label' => 'Item Classes'
                                        ],
                                        '.header' => [
                                            'type' => 'text',
                                            'label' => 'Item Header'
                                        ],
                                        '.text' => [
                                            'type' => 'markdown',
                                            'markdown' => true,
                                            'validate' => [
                                                'type' => 'textarea'
                                            ],
                                            'label' => 'Item Text'
                                        ],
                                        '.image' => [
                                            'type' => 'file',
                                            'name' => 'ItemImage',
                                            'random_name' => true,
                                            'label' => 'Item Image',
                                            'destination' => 'user/plugins/complex/assets',
                                            'filesize' => 2,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        '.image_align' => [
                                            'type' => 'select',
                                            'label' => 'Image position',
                                            'classes' => 'fancy',
                                            'default' => 'left',
                                            'options' => [
                                                'left' => 'Left',
                                                'right' => 'Right'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
