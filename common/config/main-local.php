<?php

return [
    'components' => [
        'db' => [
            'class'       => 'yii\db\Connection',
            'dsn'         => env('DB_DSN'),
            'username'    => env('DB_USERNAME'),
            'password'    => env('DB_PASSWORD'),
            'charset'     => env('DB_CHARSET'),
            'tablePrefix' => env('DB_TABLE_PREFIX'),
        ],
        // 'db' => [
        //     'class' => 'yii\db\Connection',
        //     'dsn' => 'mysql:host=192.168.1.1;dbname=table_name_1',
        //     'username' => 'username',
        //     'password' => 'pwd',
        //     'charset' => 'utf8',
        //     'enableSchemaCache' => false ,
        //     'enableQueryCache' => true,

        //     'slaveConfig' => [
        //         'username' => 'username',
        //         'password' => 'pwd',
        //         'charset' => 'utf8',
        //         'enableSchemaCache' => false ,
        //         'enableQueryCache' => true,
        //         'attributes' => [
        //             PDO::ATTR_TIMEOUT => 10,
        //         ],
        //     ],
        //     'slaves' => [
        //         ['dsn' => 'mysql:host=192.168.1.2;dbname=table_name_1'],
        //     ]
        // ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
