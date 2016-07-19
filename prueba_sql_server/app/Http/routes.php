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


/*
Route::get('/', function () {
    return view('home');
});
*/

Route::get('/', function ()
{
    return 'Hola mundo';
});

Route::get('/uno', function ()
{
    return 'Otra ruta';
});

Route::get('/ayudaUrl', function ()
{
    return url('ayudaUrl');
});

Route::get('/lista', 'consolaController@lista' );


Route::get('/prueba/{frase}', 'pruebaController@saludo' );

Route::get('/vistaPrueba', function () {
    return view('vistaPrueba', [
        'var_1' => 'Variable 1',
        'var_2' => 'Variable 2',
        'var_3' => 'Variable 3',
        'var_4' => 'Variable 4',
        'var_5' => 'Variable 5'
    ]);
});

/*
Route::get('user/{id}', function($id)
{
    return 'User '.$id;
});
*/

Route::get('user/{name}', function($name)
{
    //
})
    ->where('name', '[A-Za-z]+');

Route::get('user/{id}', function($id)
{
    //
})
    ->where('id', '[0-9]+');


//Route::get('/','HomeController@index');