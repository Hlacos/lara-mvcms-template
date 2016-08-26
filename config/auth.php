<?php

return [

    'multi-auth' => array(
        'admin' => array(
            'driver' => 'eloquent',
            'model' => Hlacos\LaraMvcms\Models\AdminUser::class,
            'email' => 'lara-mvcms::emails.auth.reminder',
        )
    ),
    'password' => array(
        'table' => 'password_resets',
        'expire' => 60,
    ),
    'globals' => [
        'user', 'check'
    ],

];
