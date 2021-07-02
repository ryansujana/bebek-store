<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProdukController;

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



Auth::routes();


Route::get('/', \App\Http\Livewire\Home::class, 'home')->name('home');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

	// Telur Production
	Route::get('/produk', [ProdukController::class, 'index'])->name('produk');

});
