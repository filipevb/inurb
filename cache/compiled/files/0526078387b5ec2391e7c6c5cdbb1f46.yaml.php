<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/inurb/user/config/site.yaml',
    'modified' => 1571503571,
    'data' => [
        'title' => 'Inurb',
        'default_lang' => 'pt',
        'author' => [
            'name' => 'Filipe Vilas-Boas',
            'email' => 'filipemvb@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'A INURB nasce em 2019, apostando no desenvolvimento de soluções técnicas e inovadoras no âmbito do turismo, com o objetivo principal de contribuir significativamente para a satisfação das necessidades dos turistas. '
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'social' => [
            'urlFacebook' => 'oo',
            'urlInstagram' => 'aa'
        ]
    ]
];
