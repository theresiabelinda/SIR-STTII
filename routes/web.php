<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

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

Route::get('/faq', function (){
    return view('faq');
});

Route::get('/panduan-unggah', function (){
    return view('panduan-unggah');
});

Route::get('/login', [App\Http\Controllers\AuthController::class, 'index'])->name('auth.index')->middleware('guest');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'verify'])->name('auth.verify');
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');

Route::middleware(['auth:user', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboardAdmin.index');
    // Route admin lainnya...
});

Route::middleware(['auth:user', 'role:user'])->prefix('user')->group(function () {
    Route::get('/', function () {
        return view('backend.content.dashboardUser'); // halaman dashboard user biasa
    })->name('user.dashboard');
});

Route::group(['middleware' => 'auth:user'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
        Route::get('/reset-password', [DashboardController::class, 'resetPassword'])->name('dashboard.resetPassword');
        Route::post('/reset-password', [DashboardController::class, 'prosesResetPassword'])->name('dashboard.prosesResetPassword');

        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user.tambah');
        Route::post('/user/prosesTambah', [UserController::class, 'prosesTambah'])->name('user.prosesTambah');
        Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('user.ubah');
        Route::post('/user/prosesUbah', [UserController::class, 'prosesUbah'])->name('user.prosesUbah');
        Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('user.hapus');


        Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
        Route::get('/kategori/tambah', [KategoriController::class, 'tambah'])->name('kategori.tambah');
        Route::post('/kategori/prosesTambah', [KategoriController::class, 'prosesTambah'])->name('kategori.prosesTambah');
        Route::get('/kategori/ubah/{id}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
        Route::post('/kategori/prosesUbah', [KategoriController::class, 'prosesUbah'])->name('kategori.prosesUbah');
        Route::get('/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('kategori.hapus');

        Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
        Route::get('/berita/tambah', [BeritaController::class, 'tambah'])->name('berita.tambah');
        Route::post('/berita/prosesTambah', [BeritaController::class, 'prosesTambah'])->name('berita.prosesTambah');
        Route::get('/berita/ubah/{id}', [BeritaController::class, 'ubah'])->name('berita.ubah');
        Route::post('/berita/prosesUbah', [BeritaController::class, 'prosesUbah'])->name('berita.prosesUbah');
        Route::get('/berita/hapus/{id}', [BeritaController::class, 'hapus'])->name('berita.hapus');
        Route::get('/berita/cari', [BeritaController::class, 'cari'])->name('berita.cari');
    });


    Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');
});
