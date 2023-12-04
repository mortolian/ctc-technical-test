<?php declare(strict_types=1);

use Gideon\Framework\http\Kernel;
use Gideon\Framework\http\Request;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$request = Request::createFromGlobals();
$kernel = new Kernel();
$response = $kernel->handle($request);
$response->send();