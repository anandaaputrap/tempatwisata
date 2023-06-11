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
    return view('template.admin.page.blankpage');
});

Route::get('/pub', function () {
    return view('template.public.pages.home');
});
Route::get('/pub/login', function () {
    return view('template.public.pages.login');
})->name('login');
Route::get('/pub/register', function () {
    return view('template.public.pages.register');
})->name('register');
Route::get('/pub/destinasi', function () {
    return view('template.public.pages.destinasi');
})->name('destinasi');
Route::get('/pub/destinasidetail', function () {
    return view('template.public.pages.detaildestinasi');
})->name('detail');