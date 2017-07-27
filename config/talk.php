<?php

return [
    'user' => [
        'model' => 'App\User',
    ],
    'broadcast' => [
        'enable' => false,
        'app_name' => 'DailyWodTracker',
        'pusher' => [
            'app_id' => 'dwt-message',
            'app_key' => 'H38shbamvberEkL982h7Nmals',
            'app_secret' => 'AaBbCcFfjdkw8579830jfj',
            'options' => [
                'cluster' => 'ap1',
                'encrypted' => true
            ]
        ],
    ],
];
