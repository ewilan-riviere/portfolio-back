<?php

return [
    /*
  |--------------------------------------------------------------------------
  | Image Driver
  |--------------------------------------------------------------------------
  |
  | Intervention Image supports "GD Library" and "Imagick" to process images
  | internally. You may choose one of them according to your PHP
  | configuration. By default PHP's "GD Library" implementation is used.
  |
  | Supported: "gd", "imagick"
  |
  */

    'driver' => 'gd',

    'thumbnails' => [
        // Classic
        'admin_preview' => [
            'width'  => 200,
            'height' => 200,
        ],
        'small' => [
            'width'  => 400,
            'height' => 400,
        ],
        'medium' => [
            'width'  => 900,
            'height' => 900,
        ],
        'large' => [
            'width'  => 1800,
            'height' => 1800,
        ],

        // Custom sizes
        'post' => [
            'width'  => 600,
            'height' => 500,
        ],
        'newsletter_feature' => [
            'width'  => 500,
            'height' => 250,
        ],
        'avatar' => [
            'width'  => 100,
            'height' => 100,
        ],
    ],
];
