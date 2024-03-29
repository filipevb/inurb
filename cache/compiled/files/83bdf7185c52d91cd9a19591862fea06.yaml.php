<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/inurb/user/plugins/random/blueprints.yaml',
    'modified' => 1570122703,
    'data' => [
        'name' => 'Random',
        'version' => '1.5.0',
        'description' => 'Allows to randomly select a page from a collection of pages. Flexible **filters** provide maximum reconfigurability.',
        'icon' => 'refresh',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-random',
        'demo' => 'http://demo.getgrav.org/blog-skeleton',
        'keywords' => 'random, plugin, blog, pages',
        'bugs' => 'https://github.com/getgrav/grav-plugin-random/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'route' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Route',
                    'default' => '/random',
                    'help' => 'Default route of the random plugin'
                ],
                'redirect' => [
                    'type' => 'toggle',
                    'label' => 'Redirect',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'filters.category' => [
                    'type' => 'selectize',
                    'label' => 'Category filter',
                    'help' => 'Comma separated list of category names',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'filter_combinator' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Filter Combinator',
                    'default' => 'and',
                    'options' => [
                        'and' => 'And - Boolean &&',
                        'or' => 'Or - Boolean ||'
                    ]
                ]
            ]
        ]
    ]
];
