<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// front routes
Route::name('front.')->group(function () {
    Route::view('/', 'front.index')->name('index');
    Route::view('/about', 'front.about')->name('about');
    Route::view('/service', 'front.service')->name('service');
    Route::view('/feature', 'front.feature')->name('feature');
    Route::view('/contact', 'front.contact')->name('contact');
});


// admin routes
Route::name('admin.')
    ->prefix(LaravelLocalization::setLocale() . '/admin')
    ->middleware([ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ])
    ->group(function () {
        Route::middleware('auth')->group(function () {
        // ================================== Home Page ==================================
        Route::view('/', 'admin.index')->name('index');
        // ================================== Services ==================================
        Route::controller(ServiceController::class)->group(function () {
           Route::resource('services', ServiceController::class); 
        });
        // ================================== Features ==================================
        Route::controller(FeatureController::class)->group(function () {
            Route::resource('features', FeatureController::class); 
         });
         // ================================== Messages ==================================
        Route::controller(MessageController::class)->group(function () {
            Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']); 
         });
    });
    // Route::view('/login', 'admin.login')->name('login');

    require __DIR__.'/auth.php';
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

