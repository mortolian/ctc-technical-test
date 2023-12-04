<?php

namespace Gideon\Framework\routing;

use Gideon\Framework\http\Request;

interface RouterInterface
{
    public function dispatch(Request $request);
}