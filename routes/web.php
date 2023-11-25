<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistroController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('principal');
});




Route::get('/productos', [ProductosControlleR::class, 'index'])->name('productosIndex');

Route::get('/productos/create', [ProductosControlleR::class, 'create'])->name('productosCreate');

Route::post('/productos', [ProductosControlleR::class, 'store'])->name('productosStore');

Route::get('/productos/{productos}/edit', [ProductosControlleR::class, 'edit'])->name('productosEdit');

Route::get('/productos/{productos}/edit', [ProductosControlleR::class, 'edit'])->name('productosEdit');

Route::patch('/productos/{productos}', [ProductosControlleR::class, 'update'])->name('productosUpdate');

Route::delete('/productos/{productos}', [ProductosControlleR::class, 'destroy'])->name('productosDestroy');


//REGISTRO

Route::get('/cuenta', [RegistroController::class, 'index'])->name('registroIndex');

Route::post('/cuenta', [RegistroController::class, 'store'])->name('registroStore');





//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('DashboardIndex');

//login
Route::get('/login', [LoginController::class, 'index'])->name('loginIndex');

Route::post('/login', [LoginController::class, 'store'])->name('loginStore');

//logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logoutStore');
