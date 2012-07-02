<?php

error_reporting(E_ALL);

try {

    $basePath = __DIR__.'/';

    require $basePath.'../app/config/config.php';
    require $basePath.'../app/config/routes.php';
    require $basePath.'../vendor/loader.php';

    Phalcon_Session::start();

    $front = Phalcon_Controller_Front::getInstance();

    $front->setRouter($router);
    $front->setConfig($config);

    echo $front->dispatchLoop()->getContent();

} catch (Phalcon_Exception $e) {
    echo "PhalconException: ", $e->getMessage();
}
