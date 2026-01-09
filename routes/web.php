<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\UserSearchController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::get('/users', [ProfileController::class, 'index'])->name('users.index');
Route::get('/users/search', [UserSearchController::class, 'index'])->name('users.search');
Route::get('/users/{user}', [UserSearchController::class, 'show'])->name('users.show');

Route::get('/contact', [FormsController::class, 'index'])->name('forms.index');
Route::post('/contact', [FormsController::class, 'store'])->name('forms.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});


require __DIR__.'/auth.php';
