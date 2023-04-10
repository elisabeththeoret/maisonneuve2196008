<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Localization;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;

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

/**
 * Home 
 */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return redirect(
        route('home')
    );
});

/**
 * Lang 
 */
Route::get('locale/{locale}', [LocalizationController::class, 'index'])->name('lang');

/**
 * User 
 */
Route::get('register', [CustomAuthController::class, 'register'])->name('register');
Route::post('register', [CustomAuthController::class, 'store'])->name('register');
Route::get('login', [CustomAuthController::class, 'login'])->name('login');
Route::post('login', [CustomAuthController::class, 'authenticate'])->name('login');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('dashboard', [CustomAuthController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('user-show/{user}', [CustomAuthController::class, 'show'])->name('user.show')->middleware('auth');
Route::get('user-edit/{user}', [CustomAuthController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::put('user-edit/{user}', [CustomAuthController::class, 'update'])->name('user.update')->middleware('auth');
Route::delete('user-delete/{user}', [CustomAuthController::class, 'destroy'])->name('user.delete')->middleware('auth');

/**
 * Student 
 */
Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/student-create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student-create', [StudentController::class, 'store'])->name('student.store');
Route::get('/student-show/{student}', [StudentController::class, 'show'])->name('student.show');
Route::get('/student-edit/{student}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student-edit/{student}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student-delete/{student}', [StudentController::class, 'destroy'])->name('student.delete');

/**
 * Post 
 */
Route::get('post', [PostController::class, 'index'])->name('post')->middleware('auth');
Route::get('post-byuser', [PostController::class, 'myPosts'])->name('myPosts')->middleware('auth');
Route::get('post-create', [PostController::class, 'create'])->name('post.create')->middleware('auth');
Route::post('post-create', [PostController::class, 'store'])->name('post.store')->middleware('auth');
Route::get('post-show/{post}', [PostController::class, 'show'])->name('post.show')->middleware('auth');
Route::get('post-edit/{post}', [PostController::class, 'edit'])->name('post.edit')->middleware('auth');
Route::put('post-edit/{post}', [PostController::class, 'update'])->name('post.update')->middleware('auth');
Route::delete('post-delete/{post}', [PostController::class, 'destroy'])->name('post.delete')->middleware('auth');

/**
 * Document 
 */
Route::get('document', [DocumentController::class, 'index'])->name('document')->middleware('auth');
Route::get('document-byuser', [PostController::class, 'myDocuments'])->name('myDocuments')->middleware('auth');
Route::get('document-create', [DocumentController::class, 'create'])->name('document.create')->middleware('auth');
Route::post('document-create', [DocumentController::class, 'store'])->name('document.store')->middleware('auth');
Route::get('document-show/{document}', [DocumentController::class, 'show'])->name('document.show')->middleware('auth');
Route::get('document-edit/{document}', [DocumentController::class, 'edit'])->name('document.edit')->middleware('auth');
Route::put('document-update/{document}', [DocumentController::class, 'update'])->name('document.update')->middleware('auth');
Route::delete('document-delete/{document}', [DocumentController::class, 'destroy'])->name('document.delete')->middleware('auth');
