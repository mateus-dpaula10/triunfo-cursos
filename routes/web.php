<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/eja', [HomeController::class, 'eja'])->name('eja.index');
Route::get('/redirect', [HomeController::class, 'whatsapp'])->name('redirect.whatsapp');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard.index');

Route::get('/admin/create', [AuthController::class, 'create'])->name('admin.users.create');
Route::post('/admin/store', [AuthController::class, 'store'])->name('admin.users.store');
Route::get('/admin/all', [AuthController::class, 'getAll'])->name('admin.users.all');
Route::patch('/admin/patch', [AuthController::class, 'update'])->name('admin.users.patch');