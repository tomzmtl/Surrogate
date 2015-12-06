<?php

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


// SITE ROUTES

$app->get( '/', 'PageController@index' );


// API ROUTES

$app->group(
[
    'prefix' => 'api',
    'namespace' => 'App\Http\Controllers'
],
function($app)
{
    $app->get( 'img/src',   'ApiController@imgSrc' );
    //$app->get( 'img/tag', 'ApiController@lorem' );
    $app->get( 'lorem', 'ApiController@lorem' );
    $app->get( 'lorem/{count}', 'ApiController@lorem' );
});
