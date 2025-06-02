<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;

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


Route::get('/admin/create', [AuthController::class, 'create'])->name('admin.users.create');
Route::post('/admin/store', [AuthController::class, 'store'])->name('admin.users.store');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/all', [AuthController::class, 'getAll'])->name('admin.users.all');
    Route::patch('/admin/patch', [AuthController::class, 'update'])->name('admin.users.patch');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login.auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('login.logout');

Route::resource('/cursos', CourseController::class);
Route::patch('/cursos/patch', [CourseController::class, 'update'])->name('cursos.patch');

Route::resource('/exams', ExamController::class);
Route::resource('/questions', QuestionController::class);

Route::post('/exams/{exam}/submit', [ExamController::class, 'submit'])->name('exams.submit');
Route::get('/exams/{exam}/result', [ExamController::class, 'result'])->name('exams.result');