<?php

use Biskuit\Application;

return [

    'name' => 'todo',

    'main' => function(Application $app) {

    },

    'autoload' => [
        'Biskuit\\Todo\\' => 'src'
    ],

    'resources' => [
        'todo:' => ''
    ],

    'routes' => [
        '@todo' => [
            'path' => '/todo',
            'controller' => 'Biskuit\\Todo\\Controller\\TodoController'
        ]
    ],

    'config' => [
        'entries' => [
            ['message' => 'Buy milk.', 'done' => false],
            ['message' => 'Read book.', 'done' => false],
            ['message' => 'Drink coffee.', 'done' => true]
        ]
    ],

    'menu' => [

        'todo' => [
            'label'  => 'ToDo',
            'icon'   => 'app/system/assets/images/placeholder-icon.svg',
            'url'    => '@todo',
            'active' => '@todo/*',
            'access' => 'todo: manage'
        ]

    ],

];
