<?php

namespace SiRoute\Middleware;

/**
 * Interface Middleware
 */
interface MiddlewareInterface
{
    /**
     * @param Request $request
     */
    public function process(array $vars);
}
