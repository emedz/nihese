<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\DatapetugasController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdukPetugasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\LelangController;
use App\Http\Controllers\RiwayatUserController;
use App\Http\Controllers\RiwayatLelangController;
use App\Http\Controllers\LaporanController;
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
//LOGIN
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'authenticate'])->name('authenticate');
//REGISTER
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('register.post');
//LOGOUT
Route::post('/logout',[AuthController::class,'logout']);

//ADMIN
Route::get('/dashboard',[AdminController::class,'index']);
Route::resource('/datauser', DataUserController::class);
Route::resource('/datapetugas', DatapetugasController::class);
Route::resource('/lelang', LelangController::class);
Route::resource('/dataproduk', ProdukController::class);
Route::resource('/riwayat', RiwayatLelangController::class);
Route::get('/laporan',[LaporanController::class,'index']);





//petugas
Route::resource('produk', ProdukPetugasController::class);
Route::get('/dashboard/petugas', function () { return view('petugas.dashboard',['title'=>'Dashboard-Petugas']); });

//user
Route::resource('/home', HomeController::class);
Route::resource('/homeuser', HomeUserController::class);
Route::resource('/riwayatuser', RiwayatUserController::class);

