<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\OthersController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
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
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::get('/', [ProductsController::class, 'home'])->name('home');
Route::get('/produtos', [ProductsController::class, 'products'])->name('products');


Route::get('/minha-conta', [ClientController::class, 'account'])->name('account');
Route::get('/register', [ClientController::class, 'register'])->name('register');
Route::get('/entrar', [ClientController::class, 'login'])->name('login');

Route::get('/eventos', [OthersController::class, 'events'])->name('events');
Route::get('/sobre', [OthersController::class, 'aboutus'])->name('aboutus');


