<?php

use \App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MahasiswaController;
use \App\Http\Controllers\DosenController;
use \App\Http\Controllers\MatakuliahController;
use \App\Http\Controllers\PasienController;
use \Illuminate\Auth\Middleware\Authenticate;

Route::middleware([Authenticate::class])->group(function (){

Route::resource('pasien', PasienController::class);
Route::resource('Daftar', DaftarController::class);
Route::resource('matakuliah', MatakuliahController::class);

});
Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});





Route::get('mahasiswa',[MahasiswaController::class, 'index']);
Route::get('mahasiswa/create',[MahasiswaController::class, 'create']);
Route::get('mahasiswa/tambah',[MahasiswaController::class, 'tambah']);

Route::get('dosen',[DosenController::class, 'index']);
Route::get('dosen/tambah',[DosenController::class, 'tambah']);



Route::get('/', function () {
    return view('welcome');
});

Route::get('profil', function () {
    return 'Hai, Selamat Datang';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
