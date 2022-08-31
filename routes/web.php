<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/login', [App\Http\Controllers\SiteController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\InstitusiController::class, 'dashboard'])->middleware('auth', 'verified');
Auth::routes(['verify' => true]);

// admin
Route::get('/admin/daftar-permohonan', function () {
    return view('SidebarAdmin/daftar-permohonan');
});
Route::get('/admin/riwayat-permohonan', function () {
    return view('SidebarAdmin/riwayat-permohonan');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admin/tabel-kerjasama', function () {
    return view('SidebarAdmin/tabel-kerjasama');
});
Route::get('/admin/input-berita', [App\Http\Controllers\BeritaController::class, 'input']);
Route::get('/admin/tabel-berita', [App\Http\Controllers\BeritaController::class, 'tabel']);
Route::get('/admin/tabel-berita/hapus/{id}', [App\Http\Controllers\BeritaController::class, 'hapus']);
Route::get('/admin/edit-berita/{id}', [App\Http\Controllers\BeritaController::class, 'edit']);
Route::post('/admin/update/{id}', [App\Http\Controllers\BeritaController::class, 'update']);
Route::post('/admin/input-berita/simpan', [App\Http\Controllers\BeritaController::class, 'simpan']);
