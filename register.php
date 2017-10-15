<?php

return [
    'mod_blog' => [
        'name' => 'Blog',
        'type' => 'module',
        'providers' => [
            Mods\Blog\BlogServiceProvider::class,
            Mods\Blog\WebRouteServiceProvider::class,
            Mods\Blog\BackendRouteServiceProvider::class,
        ],
        'aliases' => [
        ],
        'depends' => [
        ],
        'autoload' => [
            'psr-4' => [
                'Mods\\Blog\\' => realpath(__DIR__.'/src/')
            ]
        ]
    ]
];
