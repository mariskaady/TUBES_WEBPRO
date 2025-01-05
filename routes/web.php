<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaketMCUController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PendaftaranMCUController;
use App\Http\COntrollers\JadwalDokterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MCUPasienController;
use App\Http\Controllers\PetugasController;

Route::resource('paket_mcu', PaketMCUController::class);
Route::resource('pasien', PasienController::class);
Route::resource('pendaftaran_mcu', PendaftaranMCUController::class);
Route::get('/jadwal', [JadwalDokterController::class, 'index'])->name('jadwal.dokter.index');
// routes/web.php
Route::get('/anak', [JadwalDokterController::class, 'anak'])->name('jadwal.dokter.anak');
Route::get('/penyakit-dalam', [JadwalDokterController::class, 'penyakitDalam'])->name('jadwal.dokter.penyakit_dalam');
Route::get('/jantung-pembuluh-darah', [JadwalDokterController::class, 'jantung'])->name('jadwal.dokter.jantung');
Route::get('/umum', [JadwalDokterController::class, 'umum'])->name('jadwal.dokter.umum');
Route::get('/paru', [JadwalDokterController::class, 'paru'])->name('jadwal.dokter.paru');
Route::get('/psikiater', [JadwalDokterController::class, 'jiwa'])->name('jadwal.dokter.jiwa');

Route::get('pendaftaran_mcu/laporan', [PendaftaranMCUController::class, 'laporan'])->name('pendaftaran_mcu.laporan');
Route::get('/create', function () {
    return view('pendaftaran_mcu.create');
});
Route::get('/create', [PendaftaranMCUController::class, 'create']);
Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/layouts', function () {
    return view('layouts.app');
});

// Show login options
Route::get('/login', [LoginController::class, 'showLoginOptions'])->name('login.options');
Route::get('/loginPetugas', [LoginController::class, 'showLoginPetugas'])->name('login.petugas');
Route::post('/loginPetugas', [LoginController::class, 'loginPetugas'])->name('login.petugas.post');
Route::get('/loginPasien', [LoginController::class, 'showLoginPasien'])->name('login.pasien');
Route::post('/loginPasien', [LoginController::class, 'loginPasien'])->name('login.pasien.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/pilihan-login', [LoginController::class, 'showLoginOptions'])->name('login.pilihan');

Route::get('/diabetes', [MCUPasienController::class, 'showDiabetes'])->name('diabetes.show');
Route::get('/thorax', [MCUPasienController::class, 'showThorax'])->name('thorax.show');
Route::get('/abdomen', [MCUPasienController::class, 'showAbdomen'])->name('abdomen.show');
Route::get('/tbc', [MCUPasienController::class, 'showTBC'])->name('tbc.show');
Route::get('/skoliosis', [MCUPasienController::class, 'showSkoliosis'])->name('skoliosis.show');
Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index');
Route::get('/paket-mcu', [PaketMCUController::class, 'index'])->name('paket_mcu.index');
Route::get('/paket-mcu/create', [PaketMCUController::class, 'create'])->name('paket_mcu.create');
Route::get('/paket-mcu/{id}', [PaketMCUController::class, 'edit'])->name('paket_mcu.edit');
Route::get('/paket-mcu/create', [PaketMCUController::class, 'create'])->name('paket-mcu.create');
Route::post('/paket-mcu/store', [PaketMCUController::class, 'store'])->name('paket-mcu.store');

Route::get('/layouts/app', function () {
    return view('layouts.app');
})->name('layouts.app');
Route::get('/dashboard', function () {
    return view('petugas.index');
})->name('petugas.index');
Route::get('/petugas', function () {
    return view('petugas.index');
})->name('petugas.index');

Route::get('/pasien/dashboard',function () {
    return view('pasien.dashboard');
})->name('pasien.dashboard');
Route::get('/logout', function () {
    return view('layouts.app');
})->name('layouts.app');
