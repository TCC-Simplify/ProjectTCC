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

//rotas usuario
Route::get('/editar/{id}', 'EmpresaController@edit');
Route::get('/cadastro_user',function(){
    return view('users/cad_users');
});




Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/log', 'LogController@index');

//Rotas Empresa
Route::get('/cadastro', 'EmpresaController@create');
Route::post('/cadastro_empresa', 'EmpresaController@store');
