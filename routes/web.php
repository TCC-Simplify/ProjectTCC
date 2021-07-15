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
 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/emails', function () {
    return view('emails');
});

//Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::post('register', 'Auth\RegisterController@register')->name('register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index');

Route::get('/log', 'LogController@index');
Route::post('/log/muda_senha', 'LogController@muda');

//rotas usuario
Route::get('/cadastro_user',function(){
    return view('users/cad_users');
});
Route::post('/cad_user', 'UsuarioController@create');
Route::get('/users', 'UsuarioController@index');
Route::get('/users_des', 'UsuarioController@mostra');

Route::get('/pag_user', 'UsuarioController@show');

Route::get('/alt_user/{id}', 'UsuarioController@edit');
Route::get('/del_user/{id}', 'UsuarioController@del');
Route::get('/rea_user/{id}', 'UsuarioController@reativa');

Route::post('/update_user/{id}', 'UsuarioController@update');
Route::post('/delete_user/{id}', 'UsuarioController@delete');

//Rotas Empresa
Route::get('/empresa', 'EmpresaController@show');
Route::get('/cadastro', 'EmpresaController@create');
Route::post('/cadastro_empresa', 'EmpresaController@store');

Route::get('/editar_empresa/{id}', 'EmpresaController@edit');
Route::get('/del_empresa/{id}', 'EmpresaController@mostra');

Route::post('/update_empresa/{id}', 'EmpresaController@update');
Route::post('/delete_empresa/{id}', 'EmpresaController@delete');

//rotas zaneta
Route::get('/area_ponto', function () {
    return view('users/area_ponto');
});
Route::post('/ponto', 'PontosController@create');

//Mural
Route::get('/mural', function () {
    return view('controle/mural');
});

//Atividades
Route::get('/atividades', function () {
    return view('controle/atividades');
});

//Chat
Route::get('/chat', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');