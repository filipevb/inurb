<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\inurb\\user\\plugins\\feed/blueprints/feed.yaml',
    'modified' => 1570123003,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'blog' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.feed.limit' => [
                                    'type' => 'text',
                                    'label' => 'Feed count',
                                    'default' => 10,
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'header.feed.description' => [
                                    'type' => 'text',
                                    'label' => 'Feed description'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
