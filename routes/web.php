<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// ==========================================
// ROUTE LANDING PAGE (PUBLIK)
// ==========================================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'index'])->name('tentang');
Route::get('/pameran', [HomeController::class, 'index'])->name('pameran');
Route::get('/layanan-arsip', [HomeController::class, 'index'])->name('layananArsip');
Route::get('/kontak', [HomeController::class, 'index'])->name('kontak');

// PERBAIKAN: Hapus duplikasi route /masuk di atas, gunakan hanya yang ini
Route::get('/masuk', function () { 
    return view('auth.login'); 
})->name('masuk');

// ==========================================
// ROUTE AUTHENTIKASI
// ==========================================
Route::get('/lupa-kata-sandi', function () { 
    return view('auth.forgot-password'); 
})->name('password.request');

Route::get('/verifikasi-otp', function () { 
    return view('auth.verify-otp'); 
})->name('password.verify');

Route::get('/kata-sandi-baru', function () { 
    return view('auth.reset-password'); 
})->name('password.reset');

// ==========================================
// ROUTE DASHBOARD (BARU - SETELAH LOGIN)
// ==========================================
Route::get('/dashboard', function () {
    // Nanti ganti dengan middleware auth saat backend siap
    // Route::get('/dashboard', function () { ... })->middleware('auth');
    return view('dashboard.index');
})->name('dashboard');

Route::get('/detail-peminjaman', function () {
    return view('dashboard.detail-peminjaman');
})->name('detail.peminjaman');

Route::get('/arsip-tekstual', function () {
    return view('dashboard.arsip-tekstual');
})->name('arsip.tekstual');

Route::get('/tambah-arsip-tekstual', function () {
    return view('dashboard.tambah-arsip-tekstual');
})->name('tambah.arsip.tekstual');

Route::get('/informasi-arsip-tekstual', function () {
    return view('dashboard.informasi-arsip-tekstual');
})->name('informasi.arsip.tekstual');

Route::get('/arsip-foto', function () {
    return view('dashboard.arsip-foto');
})->name('arsip.foto');

Route::get('/tambah-arsip-foto', function () {
    return view('dashboard.tambah-arsip-foto');
})->name('tambah.arsip.foto');

Route::get('/informasi-arsip-foto', function () {
    return view('dashboard.informasi-arsip-foto');
})->name('informasi.arsip.foto');

Route::get('/arsip-cd-dvd', function () {
    return view('dashboard.arsip-cd-dvd');
})->name('arsip.cd-dvd');

Route::get('/tambah-arsip-cd-dvd', function () {
    return view('dashboard.tambah-arsip-cd-dvd');
})->name('tambah.arsip.cd-dvd');

Route::get('/informasi-arsip-cd-dvd', function () {
    return view('dashboard.informasi-arsip-cd-dvd');
})->name('informasi.arsip.cd-dvd');

Route::get('/arsip-kartografi', function () {
    return view('dashboard.arsip-kartografi');
})->name('arsip.kartografi');

Route::get('/tambah-arsip-kartografi', function () {
    return view('dashboard.tambah-arsip-kartografi');
})->name('tambah.arsip.kartografi');

Route::get('/informasi-arsip-kartografi', function () {
    return view('dashboard.informasi-arsip-kartografi');
})->name('informasi.arsip.kartografi');

Route::get('/profil', function () {
    return view('dashboard.profil');
})->name('profil');

Route::get('/ubah-kata-sandi', function () {
    return view('dashboard.ubah-kata-sandi');
})->name('ubah.kata.sandi');