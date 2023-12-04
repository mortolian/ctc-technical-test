<?php declare(strict_types=1);

use Gideon\Framework\http\Kernel;
use Gideon\Framework\http\Request;
use Gideon\Framework\routing\Router;

define('BASE_PATH', dirname(__DIR__));

require_once dirname(__DIR__) . '/vendor/autoload.php';

$request = Request::createFromGlobals();

$router = new Router();

$kernel = new Kernel($router);
$response = $kernel->handle($request);
$response->send();