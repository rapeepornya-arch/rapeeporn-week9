<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClaimController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/about', [AdminController::class, 'about'])->name('about');

Route::get('/blog', [AdminController::class, 'blog'])->name('blog');
Route::post('/blog', [AdminController::class, 'store'])->name('blog.store');
Route::delete('/delete/{id}', [AdminController::class, 'delete'])
    ->whereNumber('id')->name('blog.delete');

Route::get('/create', [AdminController::class, 'create'])->name('create');

Route::view('/welcome', 'welcome')->name('welcome');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::view('/claims/create', 'claims.create')->name('claims.create');
Route::post('/claims', [ClaimController::class, 'store'])->name('claims.store');

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/student/{id}', function (string $id) {
    return view('student', ['id' => $id]);
})->name('student.profile');

Route::fallback(function () {
    return response('ไม่พบหน้าเว็บ', 404);
});
