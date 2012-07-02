<?php

$router = new Phalcon_Router_Regex();

$router->add("/news/([0-9]{4})/([0-9]{2})/([a-z0-9\-]+)", array(
    'controller' => 'news',
    'action' => 'show',
    'year' => 1,
    'title' => 3
));

$router->add("/news/([0-9]{4})", array(
    'controller' => 'news',
    'action' => 'showYear',
    'year' => 1
));

$router->add("/set-language/([a-z0-9\-]+)", array(
    'controller' => 'index',
    'action' => 'setLanguage',
    'language' => 1
));

$router->handle();
