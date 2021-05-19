<?php

declare(strict_types=1);

return [
    'yiiliveext/yii-debug-panels' => [
        'targetHost' => '/',
        'panels' => [
            'panel-info' => [
                'name' => 'Info',
                'route' => '/debug/panels/info'
            ],
            'panel-routes' => [
                'name' => 'Routes',
                'route' => '/debug/panels/routes'
            ],
        ],
    ],
];