<?php

return [

    /*
     * The config_key for voyager-survey package.
     */
    'config_key' => env('VOYAGER_SURVEY_CONFIG_KEY', 'joy-voyager-survey'),

    /*
     * The route_prefix for voyager-survey package.
     */
    'route_prefix' => env('VOYAGER_SURVEY_ROUTE_PREFIX', 'joy-voyager-survey'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerSurvey\\Http\\Controllers',
    ],
];
