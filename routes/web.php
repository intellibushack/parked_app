<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpotsController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
});

Route::resource('/',Dashboard::class);
Route::get("/terms", function(){
    return view('terms');
})->name('terms');

// Route::resource("/spots", SpotsController::class);
Route::post('/spots/search', [SpotsController::class, 'search'])->name('spots.search');
Route::get('/spots/results', [SpotsController::class, 'show_search'])->name('spots.show.search');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
