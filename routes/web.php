<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/halo', [HelloController::class,'index']);

Route::get('/belajar/{pelatihan?}', [HelloController::class, 'les']);

Route::get('/asli', function () {
    return "<h1>Saya route sebenarnya!</h1>";
});

Route::redirect('/alias','/asli');

Route::prefix('/jti')->group(function(){
    Route::get('/dosen', function () {
        return "<h1>halaman dosen</h1>";
    });
    Route::get('/tendik', function () {
        return "<h1>halaman tendik</h1>";
    });
    Route::get('/admin', function () {
        return "<h1>halaman admin</h1>";
    });
});

Route::fallback(function(){
    return "<h1>halaman tidak ditemukan</h1>";
});

Route::get('/dts', [HelloController::class,'halamandts']);