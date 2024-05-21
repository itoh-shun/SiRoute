<?php

namespace SiRoute;

use framework\Support\ServiceProvider;

class Application
{
    public ServiceProvider $serviceProvider;

    public function __construct()
    {
        $this->startup();
        $this->serviceProvider = new ServiceProvider();
    }

    private function startup()
    {
    }

    public function boot()
    {
    }
}
