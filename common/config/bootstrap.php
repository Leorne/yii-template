<?php

//load env config
$env = Dotenv\Dotenv::create(__DIR__ . '/../..');
$env->load();

define('YII_DEBUG', getenv('APP_DEBUG'));
define('YII_ENV', getenv('APP_ENV'));

require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';

Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@admin', dirname(dirname(__DIR__)) . '/admin');
Yii::setAlias('@api', dirname(dirname(__DIR__)) . '/api');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
