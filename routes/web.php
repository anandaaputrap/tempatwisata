<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KriteriaFasilitasController;
use App\Http\Controllers\Admin\KriteriaHargaController;
use App\Http\Controllers\Admin\KriteriaJarakController;
use App\Http\Controllers\Admin\KriteriaPelayananController;
use App\Http\Controllers\Admin\KriteriaSuasanaController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Admin\WisataController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\PublicController;
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
    return view('template.public.pages.home');
})->name('home');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/post-login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::post('/post-Logout', [AuthController::class, 'postLogout'])->name('postLogout');
Route::post('/register-store', [AuthController::class, 'store'])->name('store.register');

Route::get('/otp', [AuthController::class, 'otp'])->name('otp');
Route::post('/postotp', [AuthController::class, 'verifikasi'])->name('postotp');

Route::get('/destinasi', [PublicController::class, 'index'])->name('destinasi');
Route::get('/destinasi-detail/{id}', [PublicController::class, 'detail'])->name('destinasi.detail');


Route::group(['middleware' => 'role:admin'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin');
        Route::resources([
            'wisata' => WisataController::class,
            'kriteria-fasilitas' => KriteriaFasilitasController::class,
            'kriteria-harga-tiket' => KriteriaHargaController::class,
            'kriteria-jarak' => KriteriaJarakController::class,
            'kriteria-pelayanan' => KriteriaPelayananController::class,
            'kriteria-suasana' => KriteriaSuasanaController::class,
            'perhitungan-data' => ResultController::class,
        ]);
    });
});

Route::group(['middleware' => 'role:user'], function () {

    Route::prefix('public')->group(function () {

        Route::get('/profile', [PublicController::class, 'profile'])->name('profile');
        Route::post('/edit-profile', [PublicController::class, 'editProfile'])->name('edit.profile');

        Route::get('/survei-wisata/{id}', [PublicController::class, 'survei'])->name('survei.wisata');
        Route::post('/survei-wisata', [PublicController::class, 'surveiStore'])->name('survei.wisata.post');

        Route::get('/history', [PublicController::class, 'historySurvey'])->name('history');

    });
});

// Route::get('/pub/destinasi', function () {
//     return view('template.public.pages.destinasi');
// })->name('destinasi');
// Route::get('/pub/destinasidetail', function () {
//     return view('template.public.pages.detaildestinasi');
// })->name('detail');
