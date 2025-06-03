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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/create', [AuthController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/store', [AuthController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/all', [AuthController::class, 'getAll'])->name('admin.users.all');
    Route::patch('/admin/patch', [AuthController::class, 'update'])->name('admin.users.patch');

    Route::get('/cursos/create', [CourseController::class, 'create'])->name('cursos.create');
    Route::post('/cursos/store', [CourseController::class, 'store'])->name('cursos.store');
    Route::patch('/cursos/patch', [CourseController::class, 'update'])->name('cursos.patch');

    Route::get('/exams', [ExamController::class, 'index'])->name('exams.index');
    Route::get('/exams/create', [ExamController::class, 'create'])->name('exams.create');
    Route::post('/exams/store', [ExamController::class, 'store'])->name('exams.store');
    Route::delete('/exams/{id}', [ExamController::class, 'destroy'])->name('exams.destroy');
    
    Route::patch('/questions/{question}', [QuestionController::class, 'update'])->name('questions.update');
    Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');
    Route::delete('/questions/{id}', [QuestionController::class, 'destroy'])->name('questions.destroy');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login.auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('login.logout');

Route::get('/cursos', [CourseController::class, 'index'])->name('cursos.index');

Route::get('/exams/{exam}', [ExamController::class, 'show'])->name('exams.show');
Route::post('/exams/{exam}/submit', [ExamController::class, 'submit'])->name('exams.submit');
Route::get('/exams/{exam}/result', [ExamController::class, 'result'])->name('exams.result');