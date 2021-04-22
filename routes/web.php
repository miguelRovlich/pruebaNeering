<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;

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
#productos
Route::get('/inicio',[ProductoController::class,'index'])->name('index');
Route::get('/create',[ProductoController::class,'create'])->name('create');
Route::post('/inicio',[ProductoController::class,'store'])->name('store');
Route::get('/inicio/{productos}',[ProductoController::class,'show'])->name('show');
Route::delete('inicio/{productos}',[ProductoController::class,'destroy'])->name("Producto.delete");
Route::get('inicio/{productos}/edit',[ProductoController::class,'edit'])->name("Producto.edit");;
Route::put('inicio/{productos}',[ProductoController::class,'update'])->name("Producto.update");
Route::get('/',[ProductoController::class,'index'])->name('index');

Route::view('/', 'inicio')->name('inicio');
Route::post('/usuario',[UsuarioController::class,'login'])->name('Usuario.login');
