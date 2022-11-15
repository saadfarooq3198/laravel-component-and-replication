<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('component', [HomeController::class, 'index']);
Route::get('products', [ProductController::class, 'index']);
Route::get('create/user', [UserController::class, 'createUser']);
// cloning a user
Route::get('clone/user', [UserController::class, 'cloneUSer']);

