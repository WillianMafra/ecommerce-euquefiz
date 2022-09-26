<?php

use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\AdminProductsController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OthersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
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
//Rota para o admin fazer o gerenciamento do crud
Route::prefix('admin')->group(function (){

    //Controllers Gerais Admin
    Route::get('/', [AdminController::class, 'management'])->name('management');
    Route::get('/teste', [AdminController::class, 'teste'])->name('teste');
    //Fim dos Controllers Gerais - Admin

    //Gerenciamento dos Usuarios - Admin
    Route::get('/lista/usuarios', [AdminUserController::class, 'usersList'])->name('usersList');
    Route::put('/lista/usuarios/promover/{id}', [AdminUserController::class, 'userPromotion'])->name('userPromotion');
    Route::put('/lista/usuarios/rebaixar/{id}', [AdminUserController::class, 'userDemoted'])->name('userDemoted');
    //Fim do Gerenciamento dos Usuarios - Admin

    //Gerenciamento das Categorias - Admin
    Route::get('/lista/Categorias', [AdminCategoriesController::class, 'categoriesList'])->name('categoriesList');
    Route::get('/categorias/inserirCategoria', [AdminCategoriesController::class, 'createCategory'])->name('createCategory');
    Route::post('/categorias/inserirCategoria', [AdminCategoriesController::class, 'storeCategory'])->name('storeCategory');
    Route::delete('/lista/{category}/apagar', [AdminCategoriesController::class, 'destroyCategory'])->name('destroyCategory');
    //Fim do Gerenciamento das Categorias - Admin

    //Gerenciamento dos Produtos - Admin
    Route::get('/lista', [AdminProductsController::class, 'list'])->name('list');
    Route::get('/produtos/inserirProduto', [AdminProductsController::class, 'createProduct'])->name('createProduct')->middleware('isAdmin');
    Route::post('/produtos/inserirProduto', [AdminProductsController::class, 'storeProduct'])->name('storeProduct');
    Route::get('/produtos/editarProduto/{product}', [AdminProductsController::class, 'editProduct'])->name('editProduct');
    Route::put('/produtos/editarProduto/{product}', [AdminProductsController::class, 'updateProduct'])->name('updateProduct');
    Route::delete('/lista/apagar/{product}', [AdminProductsController::class, 'destroy'])->name('destroy');
    Route::get('/admin/lista/deleteImage/{product}', [AdminProductsController::class, 'destroyImage'])->name('destroyImage');
    //Fim do Gerenciamento dos Produtos
});

//Rota para exibir os produtos Para o usuário
Route::get('/', [ProductsController::class, 'home'])->name('home');
Route::get('/categoria/{id}', [ProductsController::class, 'categoryPage'])->name('categoryPage');
Route::get('/produtos', [ProductsController::class, 'showAllProducts'])->name('showAllProducts');
Route::get('/listarprodutos', [ProductsController::class, 'productsList'])->name('productsList');
Route::get('/listarprodutos/{id}', [ProductsController::class, 'showProduct'])->name('showProduct');


//Rotas para gerenciar o carrinho de compras
Route::get('/carrinho', [CartController::class, 'carShopping'])->name('carShopping');
Route::get('/carrinho/delete', [CartController::class, 'destroy'])->name('destroyCart');
Route::post('/listarprodutos/adicionarAoCarrinho/{id}', [CartController::class, 'addToCart'])->name('addToCart');
Route::post('/carrinho/finalizar-compra', [OrderController::class, 'storeOrder'])->name('completeOrder');


//Rota para o usuário fazer login e alterar dados da conta
Route::get('/minha-conta', [ClientController::class, 'account'])->name('account');
Route::get('/register', [ClientController::class, 'register'])->name('register');
Route::post('/register', [ClientController::class, 'salvar'])->name('salvar');
Route::get('/entrar', [ClientController::class, 'login'])->name('login');
Route::post('/entrar', [ClientController::class, 'entrar'])->name('entrar');
Route::get('/logout', [ClientController::class, 'logout'])->name('logout');


Route::get('/esqueci-a-senha', [ClientController::class, 'resetPassword'])->name('resetPassword');
Route::get('/esqueci-a-senha123', [ClientController::class, 'teste'])->name('resetPassword');
Route::post('/esqueci-a-senha', [ClientController::class, 'emailPassword'])->name('password.email');
Route::get('/resetar-senha/{token}', [ClientController::class, 'formNewPassword'])->name('password.reset');
Route::post('/resetar-senha', [ClientController::class, 'storeNewPassword'])->name('storeNewPassword');




//Rotas extras que podem precisar de alguma manipulação
Route::get('/eventos', [OthersController::class, 'events'])->name('events');

Route::get('/sobre', [OthersController::class, 'aboutus'])->name('aboutus');
Route::get('/galeria', [OthersController::class, 'gallery'])->name('gallery');

//Rota para acessar o perfil de usuário
Route::get('/seu-espaco', [ProfileController::class, 'dices'])->name('dices');
