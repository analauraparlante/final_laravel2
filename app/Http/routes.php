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

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

Route::get('/', [
   'uses' => 'HomeController@index',
     'as' => 'index'
]);

Route::get('/home', [
    'uses' => 'OfertaController@index',
    'as' => 'ofertas.index'
]);

Route::get('ofertas', [
    'uses' => 'OfertaController@index',
    'as' => 'ofertas.index'
]);

Route::get('controlPanel', [
    'uses' => 'OfertaController@index',
    'as' => 'ofertas.index'
]);

/*Route::get('ofertas/panel', [
    'uses' => 'OfertaController@panel',
    'as' => 'ofertas.panel'
]);*/

//Route::get('ofertas/panel', 'OfertaController@panel');

Route::get('ofertas/panel', [
    'uses' => 'OfertaController@panel',
    'as' => 'ofertas.panel'
])->middleware('auth');

Route::get('ofertas/panel/nuevo', [
    'uses' => 'OfertaController@nuevoForm',
    'as' => 'ofertas.nuevoForm'
])->middleware('auth');

Route::post('ofertas/panel/nuevo', [
    'uses' => 'OfertaController@nuevo',
    'as' => 'ofertas.nuevo'
])->middleware('auth');

Route::get('ofertas/panel/{id}/editar', [
    'uses' => 'OfertaController@editarForm',
    'as' => 'ofertas.editarForm'
])->middleware('auth');

Route::put('ofertas/panel/{id}/editar', [
    'uses' => 'OfertaController@editar',
    'as' => 'ofertas.editar'
])->middleware('auth');

Route::delete('ofertas/panel/{id}/eliminar', [
    'uses' => 'OfertaController@eliminar',
    'as' => 'ofertas.eliminar'
])->where('id', '\d+');

//USUARIOS

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::get('/usuarios', function()
    {
        // can only access this if type == A
        Auth::user()->is_admin;
        //'uses' => 'UsuarioController@index',
        //'as' => 'usuarios.index'
    });

    Route::get('usuarios', [
    'uses' => 'UsuarioController@index',
    'as' => 'usuarios.index'
    ])->middleware('auth');

    Route::get('usuarios/nuevo', [
    'uses' => 'UsuarioController@nuevoForm',
    'as' => 'usuarios.nuevoForm'
    ])->middleware('auth');

    Route::post('usuarios/nuevo', [
        'uses' => 'UsuarioController@nuevo',
        'as' => 'usuarios.nuevo'
    ])->middleware('auth');

    Route::get('usuarios/{id}/editar', [
        'uses' => 'UsuarioController@editarForm',
        'as' => 'usuarios.editarForm'
    ])->middleware('auth');

    Route::put('usuarios/{id}/editar', [
        'uses' => 'UsuarioController@editar',
        'as' => 'usuarios.editar'
    ])->middleware('auth');

    Route::delete('usuarios/{id}/eliminar', [
        'uses' => 'UsuarioController@eliminar',
        'as' => 'usuarios.eliminar'
    ])->where('id', '\d+');

});


Route::auth();

Route::get('/home', 'HomeController@index');
