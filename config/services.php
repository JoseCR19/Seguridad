<?php
return [
    'usuario' => [
        'base_uri' => env('USUARIO_SERVICE_BASE_URL'),
        'secret' => env('USUARIO_SERVICE_SECRET'),
    ],
    'programa' => [
        'base_uri' => env('PROGRAMA_SERVICE_BASE_URL'),
        'secret' => env('PROGRAMA_SERVICE_SECRET'),
    ],

    'mantenimiento' => [
        'base_uri' => env('MANTENIMIENTO_SERVICE_BASE_URL'),
        'secret' => env('MANTENIMIENTO_SERVICE_SECRET'),
    ],
];