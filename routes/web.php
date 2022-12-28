<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;
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
    return view('home', ['title' => 'Home']);
})->name('home');

//login
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('home', [UserController::class, 'login'])->name('home');
Route::post('home', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

//menu sidebar admin
Route::get('admin/dashboard/dashboard', function () {
    return view('admin/dashboard/dashboard', ['title' => 'Dashboard']);
})->name('admin/dashboard/dashboard');
Route::get('admin/pegawai/pegawai', [PegawaiController::class, 'index'])->name('admin/pegawai/pegawai');
Route::get('admin/pasien/pasien', function () {
    return view('admin/pasien/pasien', ['title' => 'Pasien']);
})->name('admin/pasien/pasien');
Route::get('admin/pegawai/tambah_pegawai', function () {
    return view('admin/pegawai/tambah_pegawai', ['title' => 'Tambah data pegawai']);
})->name('admin/pegawai/tambah_pegawai');;

//pegawai
Route::get('admin/pegawai/tambah_pegawai', [PegawaiController::class, 'create'])->name('admin/pegawai/tambah_pegawai');
Route::post('admin/pegawai/tambah_pegawai', [PegawaiController::class, 'store'])->name('create.store');
Route::get('admin/pegawai/edit_pegawai/{id}',[PegawaiController::class,'editpegawai'])->name('admin/pegawai/edit_pegawai');
Route::post('updatepegawai/{id}',[PegawaiController::class,'updatepegawai'])->name('updatepegawai');
Route::get('admin/pegawai/hapus_pegawai/{id}', [PegawaiController::class,'destroy'])->name('hapus_pegawai');