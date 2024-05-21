<?php

namespace SiRoute;

use Exception;
use SiRoute\Request\Request;
use SiRoute\Routing\Router;

class Kernel
{
    private $app;
    private Router $router;

    public function __construct(
        Application $app,
        Router $router
    ) {
        $this->app = $app;
        $this->router = $router;
    }

    final public function handle(Request $request)
    {
        $this->app->boot();
        $this->router::setServiceProvider($this->app->serviceProvider);
        // add global middleware.
        // $this->router->middleware($this->middlewares);
        return $this->router->dispatch($request);
    }
}
