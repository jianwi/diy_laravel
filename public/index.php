<?php

require __DIR__.'\..\vendor\autoload.php';

$app = new \Illuminate\Container\Container();
with(new \Illuminate\Events\EventServiceProvider($app))->register();
with(new \Illuminate\Routing\RoutingServiceProvider($app))->register();

//启动 Eloquent
$manager = new \Illuminate\Database\Capsule\Manager();
$manager->addConnection(require "../config/database.php");
$manager->bootEloquent();

// 加载路由
require "../App/Http/routes.php";


$request = \Illuminate\Http\Request::createFromGlobals();
$response = $app['router']->dispatch($request);

$response->send();