<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '298275077279683',
    'client_secret' => 'dc850e7eec6194d6d6917c49612b9a5f',
<<<<<<< HEAD
    'redirect' => 'http://acada.starrfield.com.ng/public/login/facebook/callback',
],


	'google' => [
        'client_id' => '543120059542-jjn8n7hvsie7pv99p52p66i4d73q1nep.apps.googleusercontent.com',
        'client_secret' => 'tH5gcSWbuhMBacjpdsyBXcWy',
        'redirect' => 'http://acada.starrfield.com.ng/public/login/google/callback',
    ],

=======
    'redirect' => 'http://localhost:8000/login/facebook/callback',
],

>>>>>>> 3880f96ba8a4143cbd03f1a8fe186c2d59a98b20
];
