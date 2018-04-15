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

$router->get('/', [
    'as' => 'main', 'uses' => 'WebController@index'
]);

$router->get('parser', [
    'as' => 'parser', 'uses' => 'ParserController@index'
]);

$router->post('parser', [
    'as' => 'parserAction', 'uses' => 'ParserController@parse'
]);