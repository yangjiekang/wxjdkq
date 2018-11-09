<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {


    $router->get('/', 'HomeController@index');

    $router->get('products/create', 'ProductsController@create');
    $router->get('products', 'ProductsController@index');
    $router->post('products', 'ProductsController@store');
    $router->get('products/{id}/edit', 'ProductsController@edit');
    $router->put('products/{id}', 'ProductsController@update');
    $router->delete('products/{id}', 'ProductsController@destroy');

    $router->get('articles/create', 'ArticlesController@create');
    $router->get('articles', 'ArticlesController@index');
    $router->post('articles', 'ArticlesController@store');
    $router->get('articles/{id}/edit', 'ArticlesController@edit');
    $router->put('articles/{id}', 'ArticlesController@update');
    $router->delete('articles/{id}', 'ArticlesController@destroy');

    $router->resource('cases', 'CasesController');

});
