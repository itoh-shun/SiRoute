# SiRoute

単一ページでルーティングを行うプログラム

~~~php
<?php
//<!-- SMP_DYNAMIC_PAGE DISPLAY_ERRORS=ON NAME=xxx -->
require_once 'SiRoute/require.php';

use SiRoute\Routing\Router;

Router::map('get' , '/' , function(){
  echo "やあ";
});

// URLパラメータで &_path=/hoge とアクセスできる

Router::map('get' , '/hoge' , function(){
  echo "hoge";
});

$request = new SiRoute\Request\Request();

$router = new Router();
//$router->middleware();毎回必ずチェックする場合はこっち
$app = new SiRoute\Application();
$kernel = new \SiRoute\Kernel($app, $router);
$kernel->handle($request);
~~~
