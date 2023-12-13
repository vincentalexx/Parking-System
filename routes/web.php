<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;
use App\Models\Record;
use Illuminate\Support\Facades\Route;

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

Route::get('/signup', [UserController::class, 'signup'])->name('user.signup');
Route::post('/signup', [UserController::class, 'register'])->name('user.signup.store');

Route::get('/', [UserController::class, 'login'])->name('user.login');
Route::post('/login', [UserController::class, 'logon'])->name('user.login.store');

Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::middleware('auth')->group(function(){
    Route::get('/home', [HomeController::class, 'home'])->name('user.home');
    Route::post('/masuk', [RecordController::class, 'masuk'])->name('parkir.masuk');
    Route::post('/keluar', [RecordController::class, 'keluar'])->name('parkir.keluar');

});

Route::get('/admin', [AdminController::class, 'login_admin'])->name('admin.login');

Route::get('/admin-home', [AdminController::class, 'home_admin'])->name('admin.home');
Route::post('/admin-home', [AdminController::class, 'records_date'])->name('admin.orders.date');