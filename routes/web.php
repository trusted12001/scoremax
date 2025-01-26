<?php

use Illuminate\Support\Facades\Route;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Course;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use App\Http\Middleware\EnsureAdmin;
use Illuminate\Support\Facades\Auth;

// Frontend Routes
Route::get('/', function () {
    $courses = Course::all();
    $services = Service::all();
    $testimonials = Testimonial::all();
    return view('frontend.home', compact('courses', 'services', 'testimonials'));
})->name('home');

// Frontend Registration Routes
Route::get('/register', [RegistrationController::class, 'create'])->name('register.create');
Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');

// Admin Routes with Direct Middleware Reference
Route::prefix('admin')->middleware([\App\Http\Middleware\EnsureAdmin::class])->group(function () {
    // Dashboard Route
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Other admin routes...
    //Route::resource('users', \App\Http\Controllers\Admin\UserController::class);

    // Course Management Routes
    Route::resource('courses', CourseController::class)->names([
        'index' => 'admin.courses.index',
        'create' => 'admin.courses.create',
        'store' => 'admin.courses.store',
        'edit' => 'admin.courses.edit',
        'update' => 'admin.courses.update',
        'destroy' => 'admin.courses.destroy',
    ]);

    // Service Management Routes
    Route::resource('services', ServiceController::class)->names([
        'index' => 'admin.services.index',
        'create' => 'admin.services.create',
        'store' => 'admin.services.store',
        'edit' => 'admin.services.edit',
        'update' => 'admin.services.update',
        'destroy' => 'admin.services.destroy',
    ]);

    // Testimonial Management Routes
    Route::resource('testimonials', TestimonialController::class)->names([
        'index' => 'admin.testimonials.index',
        'create' => 'admin.testimonials.create',
        'store' => 'admin.testimonials.store',
        'edit' => 'admin.testimonials.edit',
        'update' => 'admin.testimonials.update',
        'destroy' => 'admin.testimonials.destroy',
    ]);

    // Registration Management Routes
    Route::get('/registrations', [AdminRegistrationController::class, 'index'])->name('admin.registrations.index');
    Route::delete('/registrations/{id}', [AdminRegistrationController::class, 'destroy'])->name('admin.registrations.destroy');

    // Admin Profile Route
    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('admin.profile');


    // User management Route
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->names([
        'index' => 'admin.users.index',
        'edit' => 'admin.users.edit',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.destroy',
    ]);
});

// Auth Routes
Auth::routes(['verify' => true]); // Enables login, register, password reset, and email verification routes.

// Fallback Route for Authenticated Users
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});


