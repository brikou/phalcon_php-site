<?php

$config = new Phalcon_Config(array(
    'database' => array(
        'adapter' => 'Mysql',
        'host' => 'localhost',
        'username' => 'phalcon',
        'password' => 'secret',
        'name' => 'php_site'
    ),
    'phalcon' => array(
        'controllersDir' => '../app/controllers/',
        'modelsDir' => '../app/models/',
        'viewsDir' => '../app/views/',
        'baseUri' => '/blahblah/'
    )
));
