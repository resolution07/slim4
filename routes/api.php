<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;
use Slim\Routing\RouteCollectorProxy;

/**
 * Маршрутизация для API страниц
 * @param App $router
 * @return void
 */
return static function (App $router) {
    $router->group(
        '/api',
        function (RouteCollectorProxy $group) {
            $group->get('/', function (ServerRequestInterface $request, ResponseInterface $response, $args) {
                $response->getBody()->write('Hello World!');
                return $response;
            });

            $group->get('/dev/', function (ServerRequestInterface $request, ResponseInterface $response, $args) {
                $response->getBody()->write('Dev!');
                return $response;
            });
        }
    );
};