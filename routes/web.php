<?php

use Drakkar\Actions\HomeAction;
use Slim\App;

/**
 * Маршрутизация для публичных страниц
 * @param App $router
 * @return void
 */
return static function (App $router) {
    $router->get('/', HomeAction::class);
};