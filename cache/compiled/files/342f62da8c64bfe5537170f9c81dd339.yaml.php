<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/inurb/user/plugins/backtotop/blueprints.yaml',
    'modified' => 1570123170,
    'data' => [
        'name' => 'Back to Top',
        'version' => '0.5.0',
        'description' => 'This grav plugin displays a "Back to Top" link at the end of every section, so the reader can jump back up to the table of contents. The plugin integrates the js lib "Return to Top Arrow" by [rdallaire](https://codepen.io/rdallaire/pen/apoyx).',
        'icon' => 'chevron-circle-up',
        'author' => [
            'name' => 'Marco Segato'
        ],
        'homepage' => 'https://github.com/marcosegato/grav-plugin-backtotop',
        'keywords' => 'grav, plugin, back, return, top, link',
        'bugs' => 'https://github.com/marcosegato/grav-plugin-backtotop/issues',
        'docs' => 'https://github.com/marcosegato/grav-plugin-backtotop/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'basics' => [
                    'type' => 'section',
                    'title' => 'Basics',
                    'underline' => true
                ],
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
                ]
            ]
        ]
    ]
];
