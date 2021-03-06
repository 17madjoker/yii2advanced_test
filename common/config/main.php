<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'StrposHelper' => [
            'class' => 'common\components\StrposHelper',
        ],
        'EmailService' => [
            'class' => 'common\components\EmailService',
        ],
    ],
];
