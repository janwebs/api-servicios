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

$app->get('/', function () use ($app) {
    return $app->version();
    //return "Lumen RESTful API By CoderExample (http://coderexample.com)";
});

//$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
$app->group(['prefix' => '','namespace' => 'App\Http\Controllers'], function($app)
{
	$app->get('/list-books','BookController@index');
    $app->get('/view-book/{id}','BookController@getbook');
    $app->post('/create-book','BookController@createBook');
    $app->put('/update-book/{id}','BookController@updateBook');
    $app->delete('/delete-book/{id}','BookController@deleteBook');
});

