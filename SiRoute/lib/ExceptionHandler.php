<?php

namespace SiRoute\lib;

use Exception;

class ExceptionHandler
{
    public $debug = false;

    public function render($request, Exception $exception)
    {
        $code = $exception->getCode();
        $message = $exception->getMessage();
        $title = 'Error';
    }
}
