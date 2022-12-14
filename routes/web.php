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

$router->post('/registation','RegistationController@OnRegistatio');
$router->post('/login','LoginController@OnLogin');
// $router->post('/tokenTest',['middleware'=>'auth','uses'=>'LoginController@tokenTest']);


$router->post('/insert',['middleware'=>'auth','uses'=>'PhoneBookController@phoneBookDataInsert']);
$router->post('/select',['middleware'=>'auth','uses'=>'PhoneBookController@phoneBookDataSelect']);
$router->post('/delete',['middleware'=>'auth','uses'=>'PhoneBookController@phoneBookDataDelete']);
