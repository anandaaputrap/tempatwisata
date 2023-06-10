<?php

use App\Http\Controllers\Admin\DashboardController;
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


Route::get('/pub', function () {
    return view('template.public.pages.home');
});


Route::group(['middleware' => 'role:admin'], function () {

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin');
        // Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin');
    });
});