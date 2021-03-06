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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('posts', 'PostController');
Route::resource('roles', 'RoleController');
Route::resource('users', 'UserController');
Route::resource('permissions', 'PermissionController');
Route::resource('estados', 'EstadoController');

// Route::get('permissions/{idRole}', function ($idRole)
// {
// 	return redirect()
// 			->action('PermissionController@index', ['idRole', $idRole]);
// });

// Route::get('permissions/{idRole}', [
// 			'uses' => 'PermissionController@index',
// 			'as' => 'permissions'
// 			]);
