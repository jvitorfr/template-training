<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('users', UserController::class);

Route::controller(AuthController::class)->group(function () {
  Route::post('login', 'login');
  Route::post('register', 'register');
  Route::post('logout', 'logout');
  Route::post('refresh', 'refresh');

});
//Route::post('register', [AuthController::class, 'register']);
//Route::post('login', [AuthController::class, 'login']);

//Route::controller(UserController::class)->group(function () {
//  Route::get('user/{id}', 'show');
//});

//Route::get('user/{id}', 'UserController@show')->name('auth.user');
//Route::get('register', 'AuthController@register')->name('auth.register');



Route::controller(TodoController::class)->group(function () {
  Route::get('todos', 'index');
  Route::post('todo', 'store');
  Route::get('todo/{id}', 'show');
  Route::put('todo/{id}', 'update');
  Route::delete('todo/{id}', 'destroy');
});




