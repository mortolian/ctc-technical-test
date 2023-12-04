<?php

namespace App\Controller;

use Gideon\Framework\http\Response;

class HomeController
{
    public function index(): Response
    {
        $content = '<h1>Hello World</h1>';

        return new Response($content);
    }
}