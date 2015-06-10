<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->group(['namespace' => 'App\Http\Controllers'], function () use ($app) {
    $app->get('/users', 'UserController@all');
    $app->get('/users/{id}', 'UserController@show');

    $app->get('/locations', 'LocationController@all');
    $app->get('/locations/{id}', 'LocationController@show');
    $app->get('/locations/{id}/events', 'LocationController@events');

    $app->post('/locations/{id}/favorite', 'LocationController@favorite');

    $app->get('/favorites', 'FavoriteController@all');

    $app->get('/events', 'EventController@all');
});

