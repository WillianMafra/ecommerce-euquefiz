<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeralController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [GeralController::class, 'home']);

Route::get('/eventos', [GeralController::class, 'events']);

Route::get('/entrar', [GeralController::class, 'login']);

Route::get('/produtos', [GeralController::class, 'products']);

Route::get('/sobre', [GeralController::class, 'aboutus']);

Route::get('/minha-conta', [GeralController::class, 'account']);