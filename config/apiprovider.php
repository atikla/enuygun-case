<?php
    /*
    |--------------------------------------------------------------------------
    | api providers 
    |--------------------------------------------------------------------------
    |   her is our api providers definitions
    |
    */
return [
    [
        'url' => 'http://www.mocky.io/v2/5d47f24c330000623fa3ebfa',
        'task_name' => [
            'key' => false,
            'name'  => 'id',
        ],
        'difficulty' => 'zorluk',
        'duration' => 'sure'
    ],
    [
        'url' => 'http://www.mocky.io/v2/5d47f235330000623fa3ebf7',
        'task_name' => [
            'key' => true,
            'name'  => '',
        ],
        'difficulty' => 'level',
        'duration' => 'estimated_duration'
    ],
    // [
    //     'url' => '',
    //     'task_name' => [
    //         'key' => true, // true of false for take a array key as a task name
    //         'name'  => '',
    //     ],
    //     'difficulty' => '',
    //     'duration' => ''
    // ]
];