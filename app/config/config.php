<?php

$config = new Phalcon_Config(array(
    'database' => array(
        'adapter' => 'mysql',
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'name' => 'php_site'
    ),
    'phalcon' => array(
        'controllersDir' => '../app/controllers/',
        'modelsDir' => '../app/models/',
        'viewsDir' => '../app/views/',
        'baseUri' => '/php-site/public/'
    ),
));
