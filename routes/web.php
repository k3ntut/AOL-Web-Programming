<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipsAndResourcesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/tnr', TipsAndResourcesController::class);
    Route::get('/log', [LogController::class, 'index'])->name('log.index');
    Route::get('/AboutUs', function () {
        return view('AboutUs');
    })->name('aboutus');
    Route::get('/tips/{id}', [TipsAndResourcesController::class, 'show'])->name('tips.show');
});

require __DIR__.'/auth.php';