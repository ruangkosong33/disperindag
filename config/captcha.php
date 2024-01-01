<?php
/*
 * Secret key and Site key get on https://www.google.com/recaptcha
 * */
return [
    // 'secret' => env('CAPTCHA_SECRET', 'default_secret'),
    // 'sitekey' => env('CAPTCHA_SITEKEY', 'default_sitekey'),
    'secret' => '6LfPE0IpAAAAAHtHIsDUVdsB_6DDVbi9Q4Y0Yur2',
    'sitekey' => '6LfPE0IpAAAAAPxFeEwFtiySu6ANZwexd9lSj0k_',
    /**
     * @var string|null Default ``null``.
     * Custom with function name (example customRequestCaptcha) or class@method (example \App\CustomRequestCaptcha@custom).
     * Function must be return instance, read more in repo ``https://github.com/thinhbuzz/laravel-google-captcha-examples``
     */
    'request_method' => 'post',
    'options' => [
        'multiple' => false,
        'lang' => app()->getLocale(),
    ],
    'attributes' => [
        'theme' => 'light'
    ],
];
