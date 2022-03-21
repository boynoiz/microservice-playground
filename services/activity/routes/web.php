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
    $data = [
        '1' => [
            'message' => 'Hello Friend A',
        ],
        '2' => [
            'message' => 'Hello Friend B',
        ],
    ];
    return \response()->json($data);
});

$router->get('/activity/{id}', function ($id) use ($router) {
    $data = [
        '1' => [
            'message' => 'Hello Friend A',
        ],
        '2' => [
            'message' => 'Hello Friend B',
        ],
    ];

    return \response()->json($data[$id]);
});


$router->post('/activity/{id}', function ($id) use ($router) {
    $data = [
        '1' => [
            'message' => 'Hello Friend A',
        ],
        '2' => [
            'message' => 'Hello Friend B',
        ],
    ];
    if (request()->has('id')) {
        $data = array_merge($data, request()->all());
    }

    return \response()->json($data);
});

$router->patch('/activity/{id}', function ($id) use ($router) {
    $data = [
        '1' => [
            'message' => 'Hello Friend A',
        ],
        '2' => [
            'message' => 'Hello Friend B',
        ],
    ];
    if (request()->has('id')) {
        $data = array_merge($data, request()->all());
    }

    return \response()->json($data);
});

$router->delete('/activity/{id}', function ($id) use ($router) {
    $data = [
        '1' => [
            'message' => 'Hello Friend A',
        ],
        '2' => [
            'message' => 'Hello Friend B',
        ],
    ];
    if (!collect($data)->has($id)) {
        return response()->json(['error' => 'Could not found id' . $id]);
    }
    $data = collect($data)->pull($id);
    return \response()->json($data->all());
});
