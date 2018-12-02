<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {


    $router->get('/', 'HomeController@index');

    $router->resource('products', 'ProductsController');
    $router->resource('articles', 'ArticlesController');
    $router->resource('cases', 'CasesController');
    $router->resource('news', 'NewsController');
    $router->resource('pages', 'PagesController');
    $router->resource('users', 'UsersController');

});
