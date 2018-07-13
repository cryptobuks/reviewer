<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register the API routes for your application as
| the routes are automatically authenticated using the API guard and
| loaded automatically by this application's RouteServiceProvider.
|
*/

Route::group(['namespace' => 'Api\V1' ,'prefix' => 'v1'], function () {
    Route::get('/kudos', 'KudosController@index');
    Route::get('/kudos/{kudos}', 'KudosController@show');
    Route::post('/kudos', 'KudosController@store');
});
