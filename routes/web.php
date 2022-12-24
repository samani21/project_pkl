<?php

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

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('home', [UserController::class, 'login'])->name('home');
Route::post('home', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('admin/dashboard/dashboard', function () {
    return view('admin/dashboard/dashboard', ['title' => 'Admin']);
})->name('admin/dashboard/dashboard');;
Route::get('admin/pegawai/pegawai', function () {
    return view('admin/pegawai/pegawai', ['title' => 'Admin']);
})->name('admin/pegawai/pegawai');;
Route::get('admin/pasien/pasien', function () {
    return view('admin/pasien/pasien', ['title' => 'Admin']);
})->name('admin/pasien/pasien');;