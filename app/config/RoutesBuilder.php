<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Router\Group as RouterGroup;


class RoutesBuilder
{

    function initialize()
    {
    }

    function getRoutes()
    {
        $router = new Router(false);

//        $router->notFound(
//            [
//                'controller' => "base",
//                'action' => "notfound",
//            ]
//        );

        $holidays = new RouterGroup(['controller' => 'holidays']);
        //$users->setPrefix('/users');
        //$users->add('(/)?', ['action' => "create"])->via(["POST"]);
        //$users->add('/{userId}/email/validate(/)?', ['action' => "validateEmail"])->via(["POST"]);
        //$users->add('/{userId}/phone/validate(/)?', ['action' => "validatePhone"])->via(["POST"]);
        //$users->add('/{userId}(/)?', ['action' => "get"])->via(["GET"])->beforeMatch([new AuthFilter(), "check"]);
        //$users->add('/{userId}(/)?', ['action' => "update"])->via(["PUT"])->beforeMatch([new AuthFilter(), "check"]);
        //$users->add('/{userId}/toggle(/)?', ['action' => "toggle"])->via(["POST"])->beforeMatch([new AuthFilter(), "check"]);
        //$users->add('/{userId}(/)?', ['action' => "delete"])->via(["DELETE"])->beforeMatch([new AuthFilter(), "check"]);
        $holidays->add('/search(/)?(ˆ?.*)', ['action' => "search"])->via(["GET"]);
        //$users->add('/{userId}/password(/)?', ['action' => "passwordUpdate"])->via(["PUT"])->beforeMatch([new ResetFilter(), "check"]);
        $router->mount($holidays);

        return $router;
    }
}