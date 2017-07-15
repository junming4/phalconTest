<?php
use Phalcon\Mvc\Dispatcher;

$router = $di->getRouter();

// Define your routes here

$router->handle();



// Registering a dispatcher
$di->set(
    'dispatcher',
    function () {
        $dispatcher = new Dispatcher();
        $dispatcher->setDefaultNamespace(
            'App\Controllers'
        );
        return $dispatcher;
    }
);
