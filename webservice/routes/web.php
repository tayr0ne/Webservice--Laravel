<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

##
# 
# Entrada de dados WebServer 
#
Route::group(['prefix' => 'api'], function()
{
    Route::group(['prefix' => 'user'], function()
    {
        ##tipos de entrada select todos os id's
        Route::get('', ['uses' => 'UserController@allUsers']);
        ##tipos de entrada devolve apenas um id
        Route::get('{id}', ['uses' => 'UserController@umUsers']);
        ##tipos de entrada cria um novo cadastro
        Route::post('', 'UserController@cadastroUsers');
        ##tipos de entrada atualiza o id
        Route::put('{id}', ['uses' => 'UserController@updateUsers']);
        ##tipos de entrada deleta o id
        Route::delete('{id}', ['uses' => 'UserController@deteleUser']);
    });
});
#   
##  Fim

Route::get('/', function () {
    return view('welcome');
});
