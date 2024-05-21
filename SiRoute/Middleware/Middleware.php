<?php

namespace SiRoute\Middleware;

use framework\Support\ServiceProvider;
use SiRoute\Request\Request;

/**
 * Interface Middleware
 */
class Middleware
{
    protected Request $request;
    protected ServiceProvider $serviceProvider;

    public function __construct(Request $request, ServiceProvider $serviceProvider)
    {
        $this->request = $request;
        $this->serviceProvider = $serviceProvider;
    }
}
