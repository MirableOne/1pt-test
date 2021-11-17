<?php


$kernel = new Kernel\Kernel();

$app = $kernel->makeApplication('http');
$app->declareRoutes('App/routes');

$request = Kernel\Request::fromGlobals();

$response = $app->through($request);

//some render
echo $response->body();