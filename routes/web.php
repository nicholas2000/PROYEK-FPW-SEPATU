<?php

use App\Http\Controllers\SiteController;
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
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/cekLogin',[SiteController::class, 'cekLogin'])->name('login');
Route::get('/cekRegister', [SiteController::class, 'cekRegister'])->name('cekRegister');

Route::get('/homeUser', function () {
    return view('homeUser');
});
Route::get('/homeAdmin', function () {
    return view('homeAdmin');
});

