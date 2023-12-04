<?php

return [
    ['GET', '/', [App\Controller\HomeController::class, 'index']],
    ['GET', '/posts/{id:\d+}', [App\Controller\PostsController::class, 'show']],
    ['GET', '/hello/{name:.+}', function(string $name) {
        return new \Gideon\Framework\src\http\Response("Hello $name");
    }],
    ['POST', '/method', [App\Controller\HomeController::class, 'index']]
];