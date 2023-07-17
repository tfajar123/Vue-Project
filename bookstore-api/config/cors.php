<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */
<<<<<<< HEAD
<<<<<<< HEAD
    
    
    'paths' => ['*', 'sanctum/csrf-cookie'],
=======

    'paths' => ['api/*', 'sanctum/csrf-cookie'],
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======

    'paths' => ['api/*', 'sanctum/csrf-cookie'],
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
