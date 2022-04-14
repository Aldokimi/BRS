<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/List-by-Genre', [App\Http\Controllers\HomeController::class, 'ListbyGenre'])->name('ListbyGenre');
Route::get('/book-details', [App\Http\Controllers\HomeController::class, 'bookDetails'])->name('bookDetails');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/my-rentals', [App\Http\Controllers\HomeController::class, 'myRentals'])->name('myRentals');
Route::get('/rental-details', [App\Http\Controllers\HomeController::class, 'rentalDetails'])->name('rentalDetails');
Route::get('/add-book', [App\Http\Controllers\HomeController::class, 'addBook'])->name('addBook');
Route::get('/genre-list', [App\Http\Controllers\HomeController::class, 'genreList'])->name('genreList');
Route::get('/add-genre', [App\Http\Controllers\HomeController::class, 'addGenre'])->name('addGenre');
Route::get('/edit-genre', [App\Http\Controllers\HomeController::class, 'editGenre'])->name('editGenre');

Route::get('/auth/login', function () {
    return view('home');
});
