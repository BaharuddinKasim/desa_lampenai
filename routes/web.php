<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\AntarSuratController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\KelolaSuratController;
use App\Http\Controllers\PersetujuanController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\Surat\SuratKetTidakMampuController;

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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//hak akses
Route::group(['middleware' => 'admin'], function() {
    Route::get('/skeluar', [SuratKeluarController::class, 'index']);

    Route::get('/disposisi', [DisposisiController::class, 'index']);

    Route::get('/surat', [KelolaSuratController::class, 'index']);

    Route::get('/smasuk', [SuratMasukController::class, 'index'])->name('smasuk');
    Route::get('/smasuk/detail/{id_suratmasuk}', [SuratMasukController::class, 'detail']);

    Route::get('/setuju', [PersetujuanController::class, 'index']);

    Route::get('/antar', [AntarSuratController::class, 'index']);

    Route::group(['namespace' => 'App\Http\Controllers\Surat'], function() {
      Route::group([], function() {
        Route::get('tidak-mampu', [SuratKetTidakMampuController::class, 'index']);
      });
    });

    Route::group(['middleware' => 'superAdmin'], function() {
        Route::get('/user', [KelolaUserController::class, 'index'])->name('user');
        Route::get('/user/add', [KelolaUserController::class, 'add']);
        Route::post('/user/insert', [KelolaUserController::class, 'insert']);

        Route::get('/smasuk/add', [SuratMasukController::class, 'add']);
        Route::post('/smasuk/insert', [SuratMasukController::class, 'insert']);
        Route::get('/smasuk/edit/{id_suratmasuk}', [SuratMasukController::class, 'edit']);
        Route::post('/smasuk/update/{id_suratmasuk}', [SuratMasukController::class, 'update']);
        Route::get('/smasuk/delete/{id_suratmasuk}', [SuratMasukController::class,'delete']);
    });

    Route::group(['middleware' => 'kepalaDesa'], function() {

    });

    Route::group(['middleware' => 'kurir'], function() {

    });
});
