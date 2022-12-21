<?php

use App\Http\Controllers\AdminController;
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
    return redirect('/login');
})->middleware('mw_logout');

Route::get('/login', function () {
    return view('login');
})->middleware('mw_logout');
// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/register', function () {
    return view('register');
})->middleware('mw_logout');

Route::get('/cekLogin', [SiteController::class, 'cekLogin'])->name('login');

Route::get('/cekRegister', [SiteController::class, 'cekRegister'])->name('cekRegister');

Route::get('logout', [SiteController::class, 'logout'])->name('logout');

Route::get('/homeUser', function () {
    return view('homeUser');
})->middleware('mw_login');

Route::get('/homeAdmin', function () {
    return view('homeAdmin');
})->name('homeAdmin')
    //->middleware('mw_login')
;

Route::get('/tambahBarangAdmin', [AdminController::class, 'listBarang'])->name("tambahBarangAdmin");

Route::get('/editUserAdmin', [AdminController::class, 'listUser'])->name("editUserAdmin");

Route::get('/tambahBrandAdmin', [AdminController::class, 'listBrand'])->name("tambahBrandAdmin");

Route::get('/tambahKategoriAdmin', [AdminController::class, 'listKategori'])->name("tambahKategoriAdmin");

// Route::get('/admin', function () {
//     return view('homeAdmin');
// });

// Route::get('home', function () {
//     return view('homeUser');
// });

Route::get('/cobaTambahBarang', [AdminController::class, 'cobaTambahBarang']);

Route::get('/cobaTambahBrand', [AdminController::class, 'cobaTambahBrand']);

Route::get('/cobaTambahKategori', [AdminController::class, 'cobaTambahKategori']);

Route::get('/cobaEditBarang/{Id}', [AdminController::class, 'cobaEditBarang']);

Route::get('/cobaEditBrand/{Id_Brand}', [AdminController::class, 'cobaEditBrand']);

Route::get('/cobaEditKategori/{Id_Kategori}', [AdminController::class, 'cobaEditKategori']);

Route::get('/cobaDeleteBarang/{Id}', [AdminController::class, 'cobaDeleteBarang']);

Route::get('/cobaDeleteBrand/{Id_Brand}', [AdminController::class, 'cobaDeleteBrand']);

Route::get('/cobaDeleteKategori/{Id_Kategori}', [AdminController::class, 'cobaDeleteKategori']);

Route::get('/cobaEditUser/{user_id}', [AdminController::class, 'cobaEditUser']);

Route::get('/cobaDeleteUser/{user_id}', [AdminController::class, 'cobaDeleteUser']);

Route::get('/editbarang', [AdminController::class, 'editbarang']);
Route::get('/editBrand', [AdminController::class, 'editBrand']);
Route::get('/editKategori', [AdminController::class, 'editKategori']);
Route::get('/edituser', [AdminController::class, 'edituser']);

// Route::group(['middleware' => ['auth']], function(){

// });
