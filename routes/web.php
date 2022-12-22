<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\sitecontroller;

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::resource('categories', CategoryController::class);
    Route::resource('authors', AuthorController::class);
    Route::resource('books', BookController::class);
});

Route::get('/', function () {
    return view('welcome');
})->name('web.index');

Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [sitecontroller::class, 'index'])->name('index');
Route::get('/about', [sitecontroller::class, 'about'])->name('about');
Route::get('/contact', [sitecontroller::class, 'contact'])->name('contact');
Route::get('/book/{id}', [sitecontroller::class, 'book'])->name('book');
Route::get('/category/{id}', [sitecontroller::class, 'category'])->name('category');
