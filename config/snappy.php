<?php

return array(


    'pdf' => array(
        'enabled' => true,
        'binary'  => env('WKHTML', '/usr/local/bin') . '/wkhtmltopdf',
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),
    'image' => array(
        'enabled' => true,
        'binary'  => env('WKHTML', '/usr/local/bin') . '/wkhtmltoimage',
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),


);
