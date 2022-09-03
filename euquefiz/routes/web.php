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
Route::get('/', [GeralController::class, 'home'])->name('home');


Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::get('/eventos', [GeralController::class, 'events'])->name('events');
Route::get('/produtos', [GeralController::class, 'products'])->name('products');

Route::get('/minha-conta', [GeralController::class, 'account'])->name('account');
Route::get('/register', [GeralController::class, 'register'])->name('register');
Route::get('/entrar', [GeralController::class, 'login'])->name('login');

Route::get('/sobre', [GeralController::class, 'aboutus'])->name('aboutus');


