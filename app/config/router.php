<?php
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Events\Manager as EventsManager;

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

//TODO 测试
$di->set(
    "url",
    function ($config) {
        $url = new UrlProvider();
        $url->setBaseUri($config->application->baseUri);
        return $url;
    }
);

/*$di->set(
    "dispatcher",
    function () {
        $eventsManager = new EventsManager();
        $eventsManager->attach(
            "dispatch:beforeExecuteRoute",
            new SecurityPlugin()
        );
        $eventsManager->attach(
            "dispatch:beforeException",
            new NotFoundPlugin()
        );
        $dispatcher = new Dispatcher();
        $dispatcher->setEventsManager($eventsManager);
        return $dispatcher;
    }
);*/

class SecurityPlugin{
    public function __construct()
    {
        
    }
}


class NotFoundPlugin{
    public function __construct()
    {

    }
}
