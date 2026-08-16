<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FaqSearchController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\NewsSearchController;
use App\Http\Controllers\UserSearchController;

// Start screen (public)
Route::get('/', function () {
    return view('welcome');
});


// When logged in (middleware)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// When logged in (middleware)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes are grouped when possible

// Faq (public, no middleware)
Route::controller(FaqController::class)->group(function () {
    Route::get('/faq', 'index')->name('faq.index');
});
Route::controller(FaqSearchController::class)->group(function () {
    Route::get('/faq/search', 'index')->name('faqs.search');
    Route::get('/faq/{faq}', 'show')->name('faqs.show');
});
//Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');


//News (public, no middleware)
Route::controller(NewsController::class)->group(function () {
    Route::get('/news', 'index')->name('news.index');
});
Route::controller(NewsSearchController::class)->group(function () {
    Route::get('/news/search','index')->name('news.search');
    Route::get('/news/{news}', 'show')->name('news.show');
});
//Route::get('/news', [NewsController::class, 'index'])->name('news.index');


// Users (public, no middleware)
Route::controller(ProfileController::class)->group(function () {
    Route::get('/users', 'index')->name('users.index');
});
Route::controller(UserSearchController::class)->group(function () {
    Route::get('/users/search', 'index')->name('users.search');
    Route::get('/users/{user}', 'show')->name('users.show');
});
//Route::get('/users', [ProfileController::class, 'index'])->name('users.index');


// Contant (public, no middleware)
Route::controller(FormsController::class)->group(function () {
    Route::get('/contact', 'index')->name('forms.index');
    Route::post('/contact', 'store')->name('forms.store');
});
//Route::get('/contact', [FormsController::class, 'index'])->name('forms.index');


require __DIR__.'/auth.php';