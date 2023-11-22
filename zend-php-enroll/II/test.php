<?php
$config = [
    'router' => [
        'routes' => [
            'market' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/market',
                    'defaults' => [
                        'controller' => 'IndexController',
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
];
echo $config['router']['routes']['market']['options']['defaults']['action'];
echo PHP_EOL;
