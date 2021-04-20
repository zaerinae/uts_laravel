<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KpopController;

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

Route::get('/list-kpop', [KpopController::class, 'list']);

Route::get('/tambah-barang', function () {
    return view('tambah-barang');
});
Route::post('/simpan-barang', [KpopController::class, 'simpan']);
Route::get('/hapus-barang/{id}', [KpopController::class, 'hapus']);
Route::get('/ubah-barang/{id}', [KpopController::class, 'ubah']);
Route::post('/ubah-barang', [KpopController::class, 'rubah']);
