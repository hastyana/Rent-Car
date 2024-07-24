<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\GuestController;

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

Route::get('/', [GuestController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('/register', [AuthController::class,'register']);
Route::post('/register', [AuthController::class,'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::get('/users/home_login', [PublicController::class, 'home'])->name('home');
        Route::get('/users/pengembalian/{plat}/pengembalian', [PublicController::class, 'pengembalian_edit'])->name('pengembalian_edit');
        Route::post('/users/pengembalian/{plat}', [PublicController::class, 'pengembalian_update'])->name('pengembalian_update');
        Route::get('/users/riwayat', [PublicController::class, 'riwayat'])->name('riwayat');
        Route::get('/users/profil', [PublicController::class, 'profil'])->name('profil');
        // Route::get('/users/peminjaman/{id}/peminjaman', [PublicController::class, 'peminjaman'])->name('peminjaman_create');
        // Route::post('/users/peminjaman/{id}', [PublicController::class, 'peminjaman_save'])->name('peminjaman_save');
        Route::get('/users/peminjaman/{mobil}/peminjaman', [PublicController::class, 'peminjaman'])->name('peminjaman_create');
        Route::post('/users/peminjaman/{mobil}', [PublicController::class, 'peminjaman_save'])->name('peminjaman_save');
    });    
    Route::get('/logout', [AuthController::class,'logout']);
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        // Dashboard
        Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        // Mobil
        Route::get('/admin/mobil', [DashboardController::class, 'show_mobil'])->name('mobil');
        Route::get('/admin/mobil_add', [DashboardController::class, 'create_mobil'])->name('mobil_add');
        Route::post('/admin/mobil_add', [DashboardController::class, 'save_mobil'])->name('mobil_save');
        Route::get('/admin/mobil_edit/{id}/mobil_edit', [DashboardController::class, 'edit_mobil'])->name('mobil_edit');
        Route::post('/admin/mobil_edit/{id}', [DashboardController::class, 'update_mobil'])->name('mobil_update');
        Route::get('/admin/mobil/{id}/mobil_delete', [DashboardController::class, 'delete_mobil'])->name('mobil_delete');
        // Peminjaman
        Route::get('/admin/peminjaman', [DashboardController::class, 'peminjaman'])->name('peminjaman');
        Route::get('/admin/peminjaman/{id}/peminjaman_delete', [DashboardController::class, 'delete_peminjaman'])->name('peminjaman_delete');
        // Users
        Route::get('/admin/users', [DashboardController::class, 'show_user'])->name('users');
        Route::get('/admin/users/{id}/users_delete', [DashboardController::class, 'delete_user'])->name('users_delete');
    });    
    Route::get('/logout', [AuthController::class,'logout']);
});
