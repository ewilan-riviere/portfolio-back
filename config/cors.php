<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    * You can easily create your own cors profile.
    * More info: https://github.com/spatie/laravel-cors/#creating-your-own-cors-profile
    */
    'cors_profile' => Spatie\Cors\CorsProfile\DefaultProfile::class,

    /*
    * This configuration is used by `DefaultProfile`.
    */
    'default_profile' => [

        'allow_credentials' => true,

        'allow_origins' => [
            '*',
        ],

        'allow_methods' => [
            'POST',
            'GET',
            'OPTIONS',
            'PUT',
            'PATCH',
            'DELETE',
        ],

        'allow_headers' => [
            'Content-Type',
            'X-Auth-Token',
            'Origin',
            'Authorization',
        ],

        'expose_headers' => [
            'Cache-Control',
            'Content-Language',
            'Content-Type',
            'Expires',
            'Last-Modified',
            'Pragma',
        ],

        'forbidden_response' => [
            'message' => 'Forbidden (cors).',
            'status' => 403,
        ],

        /*
         * Preflight request will respond with value for the max age header.
         */
        'max_age' => 60 * 60 * 24,
    ],

];
