<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Google Search',
    // preloading 'log' component
    'preload' => array('log'),
    'defaultController' => 'benhvien',
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'components' => array(
        'db' => array(
            'class' => 'CDbConnection',
            'connectionString' => 'mysql:host=localhost;dbname=medkee',
            'username' => 'root',
            'password' => 'chuyenvn99',
            'emulatePrepare' => true, // needed by some MySQL installations
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '<_c:(post|comment)>/<id:\d+>/<_a:(create|update|delete)>' => '<_c>/<_a>',
                '<_c:(post|comment)>/<id:\d+>' => '<_c>/read',
                '<_c:(post|comment)>s' => '<_c>/list',
            ),
        ),
    ),
);
