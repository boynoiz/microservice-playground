<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    dump('activity');
    return $router->app->version();
});
    $router->get('/activity', function () use ($router) {
        dump('activity');
        return $router->app->version();
    });

    $router->get('/activity/test', function () use ($router) {
        dump('TEST');
        return $router->app->version();
    });
