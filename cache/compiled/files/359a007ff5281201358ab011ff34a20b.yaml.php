<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/plugins/recent-posts/blueprints.yaml',
    'modified' => 1476529944,
    'size' => 2481,
    'data' => [
        'name' => 'Recent Posts',
        'version' => '1.0.0',
        'description' => 'Displays a list of the most recent blogs posts in a sidebar widget.',
        'icon' => 'clock-o',
        'author' => [
            'name' => 'Pius Ladenburger',
            'email' => 'info@pius-ladenburger.de',
            'url' => 'https://pius-ladenburger.de'
        ],
        'homepage' => 'https://github.com/GittiHab/grav-recent-posts',
        'keywords' => 'recent-posts, plugin, blog, month, year, date, navigation, sidebar',
        'bugs' => 'https://github.com/GittiHab/grav-recent-posts/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'date_display_format' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Date Format',
                    'default' => 'jS M Y',
                    'options' => [
                        'F jS Y' => 'January 1st 2014',
                        'l jS of F' => 'Monday 1st of January',
                        'D, m M Y' => 'Mon, 01 Jan 2014',
                        'd-m-y' => '01-01-14',
                        'jS M Y' => '10th Feb 2014'
                    ]
                ],
                'limit' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Count Limit',
                    'validate' => [
                        'type' => 'number',
                        'min' => 1
                    ]
                ],
                'order.dir' => [
                    'type' => 'toggle',
                    'label' => 'Order Direction',
                    'highlight' => 'asc',
                    'default' => 'desc',
                    'options' => [
                        'asc' => 'Ascending',
                        'desc' => 'Descending'
                    ]
                ],
                'order.by' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Order Type',
                    'default' => 'date',
                    'options' => [
                        'default' => 'Default - based on folder name',
                        'folder' => 'Folder - based on prefix-less folder name',
                        'title' => 'Title - based on title field in header',
                        'date' => 'Date - based on date field in header'
                    ]
                ],
                'filters.category' => [
                    'type' => 'selectize',
                    'label' => 'Category filter',
                    'help' => 'Comma separated list of category names to be filtered for',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'filters.page' => [
                    'type' => 'pages',
                    'label' => 'Page filter',
                    'help' => 'Comma separated list of pages to be filtered for',
                    'multiple' => true,
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
