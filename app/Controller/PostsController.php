<?php

namespace App\Controller;

use Gideon\Framework\http\Response;

class PostsController
{
    public function show(int $id): Response
    {
        $content = "This is $id";

        return new Response($content);
    }
}