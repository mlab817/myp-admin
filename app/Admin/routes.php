<?php

use App\Admin\Controllers\PapController;
use App\Admin\Controllers\ReviewController;
use App\Http\Controllers\ReportController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->get('/paps/trash', [\App\Admin\Controllers\TrashController::class, 'index']);
    $router->resource('paps', PapController::class);
    $router->resource('reviews', ReviewController::class);

    $router->get('/reports', [ReportController::class, 'index'])
        ->name('reports.index');
});
