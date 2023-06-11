<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KriteriaFasilitasController;
use App\Http\Controllers\Admin\KriteriaHargaController;
use App\Http\Controllers\Admin\KriteriaJarakController;
use App\Http\Controllers\Admin\KriteriaPelayananController;
use App\Http\Controllers\Admin\KriteriaSuasanaController;
use App\Http\Controllers\Admin\WisataController;
use App\Http\Controllers\AuthController;
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
    return view('template.auth.login');
});

Route::post('/post-login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::post('/post-Logout', [AuthController::class, 'postLogout'])->name('postLogout');


Route::get('/pub', function () {
    return view('template.public.pages.home');
});


Route::group(['middleware' => 'role:admin'], function () {

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin');
        Route::get('/detail-fasilitas/{id}', [KriteriaFasilitasController::class, 'createDetail'])->name('create.detail.fasilitas');
        Route::post('/detail-fasilitas-post', [KriteriaFasilitasController::class, 'storeDetail'])->name('post.detail.fasilitas'); 
        Route::get('/edit-detail-fasilitas/{id}', [KriteriaFasilitasController::class, 'editDetail'])->name('edit.detail.fasilitas');
        Route::post('/detail-fasilitas-update{id}', [KriteriaFasilitasController::class, 'updateDetail'])->name('update.detail.fasilitas'); 
        Route::resources([
            'wisata' => WisataController::class,
            'kriteria-fasilitas' => KriteriaFasilitasController::class,
            'kriteria-harga-tiket' => KriteriaHargaController::class,
            'kriteria-jarak' => KriteriaJarakController::class,
            'kriteria-pelayanan' => KriteriaPelayananController::class,
            'kriteria-suasana' => KriteriaSuasanaController::class,
        ]);
    });
});