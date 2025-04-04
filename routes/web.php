<?php

use App\Http\Controllers\BookingsController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpotsController;
use App\Models\Bookings;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/',[Dashboard::class,'index'])->name('dashboard');
Route::get("/terms", function(){
    return view('terms');
})->name('terms');

// Route::resource("/spots", SpotsController::class);
Route::post('/spots/search', [SpotsController::class, 'search'])->name('spots.search');
Route::get('/spots/results', [SpotsController::class, 'show_search'])->name('spots.show.search');

Route::get('/bookings/spot-availability/{spot_a_id}', [BookingsController::class, 'indexCustom']);
Route::resource('bookings', BookingsController::class);

Route::get('/spots/renter', [SpotsController::class, 'renterIndex'])->name('spots.renter.index');
Route::get('/spot/availability', [SpotsController::class, 'showAvailability'])->name('spots.availability.show');
Route::resource('spots', SpotsController::class);
Route::get('/spots/availability/create', [SpotsController::class, 'createAvailability'])->name('spots.availability.create');
Route::post('/spots/availability/store', [SpotsController::class, 'storeAvailability'])->name('spots.availability.store');
Route::get('/spot/availability/{spot_id}', [SpotsController::class, 'showAvailabilityBySpot'])->name('spots.availability.show.by.spot');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
