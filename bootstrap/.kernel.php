<?php

/**
 * @author Vladamir Mukashev
 */

declare(strict_types=1);

use Slim\Factory\AppFactory;

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

$router = $app = AppFactory::create();

(require __DIR__ . '/../routes/api.php')($router);
(require __DIR__ . '/../routes/web.php')($router);

$app->run();