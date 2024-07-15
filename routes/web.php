<?php

use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
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
Route::name('front.')->controller(FrontController::class)->group(function () {
    // ================================== Newsletter ==================================
    Route::resource('subscriber', SubscriberController::class)->only(['store']);
   //  Route::post('/subscriber/store', 'subscriberStore')->name('subscriber.store');
    // ================================== Home Page ==================================
    Route::get('/', 'index')->name('index');
    // ================================== About Page ==================================
    Route::get('/about', 'about')->name('about');
    // ================================== Service Page ==================================
    Route::get('/service', 'service')->name('service');
    // ================================== Contact Page ==================================
    Route::resource('contact', MessageController::class)->only(['create', 'store']); 
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
         // ================================== Subscribers ==================================
        Route::controller(SubscriberController::class)->group(function () {
            Route::resource('subscribers', SubscriberController::class)->only(['index', 'destroy']); 
         });
         // ================================== Testimonials ==================================
         Route::controller(TestimonialController::class)->group(function () {
            Route::resource('testimonials', TestimonialController::class); 
         });
         // ================================== Settings ==================================
         Route::controller(SettingController::class)->group(function () {
            Route::resource('settings', SettingController::class)->only(['index', 'update']); 
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

