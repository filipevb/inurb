<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/inurb/user/plugins/feed/blueprints.yaml',
    'modified' => 1570123003,
    'data' => [
        'name' => 'Feed',
        'version' => '1.7.1',
        'description' => 'The **Feed** plugin is a simple yet powerful add-on that lets you view a Grav Collection as **JSON**, **RSS** or **Atom** news feed.',
        'icon' => 'rss',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-feed',
        'demo' => 'http://demo.getgrav.org/blog-skeleton',
        'keywords' => 'feed, plugin, rss, atom, collection, json',
        'bugs' => 'https://github.com/getgrav/grav-plugin-feed/issues',
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
                'limit' => [
                    'type' => 'range',
                    'label' => 'Feed count',
                    'validate' => [
                        'type' => 'number',
                        'min' => 10,
                        'max' => 1000
                    ]
                ],
                'description' => [
                    'type' => 'textarea',
                    'label' => 'Description'
                ],
                'lang' => [
                    'type' => 'text',
                    'label' => 'Feed language code',
                    'default' => 'en',
                    'placeholder' => 'en',
                    'validate' => [
                        'pattern' => '[a-zA-Z]{2,3}(-[a-zA-Z]{2,3})?'
                    ]
                ],
                'length' => [
                    'type' => 'range',
                    'label' => 'Feed Length (0 for full-text feed)',
                    'validate' => [
                        'type' => 'number',
                        'min' => 0,
                        'max' => 10000
                    ]
                ],
                'enable_json_feed' => [
                    'type' => 'toggle',
                    'label' => 'JSON feed support',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
