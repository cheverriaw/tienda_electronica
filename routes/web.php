<?php

use Illuminate\Support\Facades\Route;

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

//ruta de home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rutas de vistas
Route::resource('/home/productos',App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::resource('/home/pagos',App\Http\Controllers\PagoController::class)->middleware('auth');
Route::resource('/home/categorias',App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::resource('/home/carritos',App\Http\Controllers\CarritoController::class)->middleware('auth');
Route::resource('/home/ordenes',App\Http\Controllers\OrdeneController::class)->middleware('auth');
Route::resource('/home/clientes',App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('/home/compras',App\Http\Controllers\CompraController::class)->middleware('auth');

//rutas api
Route::apiResource('api/post', App\Http\Controllers\Api\PostController::class)->middleware('api');