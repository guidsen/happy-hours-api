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
    $app->get('auth', 'AuthController@authenticate');

    $app->get('/users', 'UserController@all');
    $app->get('/users/{id}', 'UserController@show');
    $app->get('/users/{id}/favorites', 'UserController@favorites');

    $app->get('/locations', 'LocationController@all');
    $app->get('/locations/{id}', 'LocationController@show');
    $app->get('/locations/{id}/events', 'LocationController@events');

    $app->get('/locations/test', 'LocationController@tests');


    /** @var locations/{id}/favorites?facebook_id=FACEBOOK_ID $app */
    $app->post('/locations/{id}/favorite', 'LocationController@favorite');

    $app->get('/events', 'EventController@all');
});

