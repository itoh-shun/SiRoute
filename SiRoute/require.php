<?php 
$pathPrefixInside = defined('BASE_PATH') ? BASE_PATH : '' ;
require_once $pathPrefixInside . 'SiRoute/Application.php';
require_once $pathPrefixInside . 'SiRoute/Kernel.php';
require_once $pathPrefixInside . 'SiRoute/Middleware/Middleware.php';
require_once $pathPrefixInside . 'SiRoute/Middleware/MiddlewareInterface.php';
require_once $pathPrefixInside . 'SiRoute/Middleware/MiddlewareRouterTrait.php';
require_once $pathPrefixInside . 'SiRoute/Middleware/MiddlewareTrait.php';
require_once $pathPrefixInside . 'SiRoute/Middleware/PrefixTrait.php';
require_once $pathPrefixInside . 'SiRoute/Middleware/VerifyCsrfTokenMiddleware.php';
require_once $pathPrefixInside . 'SiRoute/Request/HttpRequest.php';
require_once $pathPrefixInside . 'SiRoute/Request/HttpRequestParameter.php';
require_once $pathPrefixInside . 'SiRoute/Request/Request.php';
require_once $pathPrefixInside . 'SiRoute/Routing/Route.php';
require_once $pathPrefixInside . 'SiRoute/Routing/Router.php';
require_once $pathPrefixInside . 'SiRoute/Session/Session.php';
require_once $pathPrefixInside . 'SiRoute/Support/ServiceProvider.php';
require_once $pathPrefixInside . 'SiRoute/lib/Csrf.php';
require_once $pathPrefixInside . 'SiRoute/lib/ExceptionHandler.php';
