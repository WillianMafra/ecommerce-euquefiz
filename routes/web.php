<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OthersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//Rota para o admin fazer o gerenciamento do crud
Route::prefix('admin')->group(function (){
    Route::get('/', [AdminController::class, 'management'])->name('management');
    Route::get('/lista', [AdminController::class, 'list'])->name('list');
    Route::get('/lista/Categorias', [AdminCategoryController::class, 'categoriesList'])->name('categoriesList');
    Route::get('/categorias/inserirCategoria', [AdminCategoryController::class, 'createCategory'])->name('createCategory');
    Route::post('/categorias/inserirCategoria', [AdminCategoryController::class, 'storeCategory'])->name('storeCategory');
    Route::delete('/lista/{category}/apagar', [AdminCategoryController::class, 'destroyCategory'])->name('destroyCategory');
    Route::get('/produtos/inserirProduto', [AdminController::class, 'createProduct'])->name('createProduct');
    Route::post('/produtos/inserirProduto', [AdminController::class, 'storeProduct'])->name('storeProduct');
    Route::get('/produtos/editarProduto/{product}', [AdminController::class, 'editProduct'])->name('editProduct');
    Route::put('/produtos/editarProduto/{product}', [AdminController::class, 'updateProduct'])->name('updateProduct');
    Route::delete('/lista/{product}/apagar', [AdminController::class, 'destroy'])->name('destroy');
});



//Rota para exibir os produtos Para o usuário
Route::get('/', [ProductsController::class, 'home'])->name('home');
Route::get('/categoria/{id}', [ProductsController::class, 'categoryPage'])->name('categoryPage');
Route::get('/produtos', [ProductsController::class, 'showAllProducts'])->name('showAllProducts');
Route::get('/listarprodutos', [ProductsController::class, 'productsList'])->name('productsList');
Route::get('/produtos/{id}', [ProductsController::class, 'showProduct'])->name('show');


//Rota para o usuário fazer login e alterar dados da conta
Route::get('/minha-conta', [ClientController::class, 'account'])->name('account');
Route::get('/register', [ClientController::class, 'register'])->name('register');
Route::post('/register', [ClientController::class, 'salvar'])->name('salvar');
Route::get('/entrar', [ClientController::class, 'login'])->name('login');
Route::post('/entrar', [ClientController::class, 'entrar'])->name('entrar');
Route::get('/logout', [ClientController::class, 'logout'])->name('logout');

//Rotas extras que podem precisar de alguma manipulação
Route::get('/eventos', [OthersController::class, 'events'])->name('events');
Route::get('/sobre', [OthersController::class, 'aboutus'])->name('aboutus');

//Rota para acessar o perfil de usuário
Route::get('/seu-espaco', [ProfileController::class, 'dices'])->name('dices');
