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

Route::get('session', 'SessionController@session');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/emails', function () {
    return view('emails');
});

Route::get('/home', 'HomeController@index');
Route::get('/log', 'LogController@index');
Auth::routes();

//rotas usuario
Route::get('/cadastro_user',function(){
    return view('users/cad_users');
});
Route::post('/cad_user', 'UsuarioController@create');
Route::get('/users', 'UsuarioController@index');
Route::get('/alt_user', 'UsuarioController@show');
Route::get('/del_user', 'UsuarioController@del');
Route::get('/update_user', 'UsuarioController@update');
Route::get('/delete_user', 'UsuarioController@delete');

//Rotas Empresa
Route::get('/cadastro', 'EmpresaController@create');
Route::post('/cadastro_empresa', 'EmpresaController@store');
Route::get('/editar/{id}', 'EmpresaController@edit');
