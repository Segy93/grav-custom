<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/pages/sidebar/item.md',
    'modified' => 1685775417,
    'size' => 142,
    'data' => [
        'header' => [
            'title' => 'sidebar',
            'content' => [
                'items' => '@self.siblings',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'limit' => 10,
                'pagination' => true
            ]
        ],
        'frontmatter' => 'title: sidebar
content:
    items: \'@self.siblings\'
    order:
        by: date
        dir: desc
    limit: 10
    pagination: true',
        'markdown' => ''
    ]
];
