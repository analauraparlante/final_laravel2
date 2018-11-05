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

Route::get('/', [
   'uses' => 'HomeController@index',
     'as' => 'index'
]);


Route::get('libros', [
    'uses' => 'LibroController@index',
    'as' => 'libros.index'
]);

//FORMULARIO ALTA
Route::get('libros/nuevo', [
    'uses' => 'LibroController@nuevoForm',
    'as' => 'libros.nuevoForm'
]);

//AÑADIR LIBRO
Route::post('libros/nuevo', [
    'uses' => 'LibroController@nuevo',
    'as' => 'libros.nuevo'
]);

//FORMULARIO EDITAR
Route::get('libros/{id}/editar', [
    'uses' => 'LibroController@editarForm',
    'as' => 'libros.editarForm'
]);

//EDITAR LIBRO
Route::put('libros/{id}/editar', [
    'uses' => 'LibroController@editar',
    'as' => 'libros.editar'
]);

//ELIMINAR LIBRO
Route::delete('libros/{id}/eliminar', [
    'uses' => 'LibroController@eliminar',
    'as' => 'libros.eliminar'
])->where('id', '\d+');
Route::auth();

Route::get('/home', 'HomeController@index');
