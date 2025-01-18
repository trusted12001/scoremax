<?php

use Illuminate\Support\Facades\Route;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Course;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ServiceController;

// Frontend Routes
Route::get('/', function () {
    $courses = Course::all();
    $services = Service::all();
    $testimonials = Testimonial::all();
    return view('frontend.home', compact('courses', 'services', 'testimonials'));
})->name('home');

// Admin Routes
Route::prefix('admin')->group(function () {
    // Dashboard Route
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Course Management Routes
    Route::resource('courses', CourseController::class)->names([
        'index' => 'admin.courses.index',
        'create' => 'admin.courses.create',
        'store' => 'admin.courses.store',
        'show' => 'admin.courses.show',
        'edit' => 'admin.courses.edit',
        'update' => 'admin.courses.update',
        'destroy' => 'admin.courses.destroy',
    ]);

    // Service Management Routes
    Route::resource('services', ServiceController::class)->names([
        'index' => 'admin.services.index',
        'create' => 'admin.services.create',
        'store' => 'admin.services.store',
        'show' => 'admin.services.show',
        'edit' => 'admin.services.edit',
        'update' => 'admin.services.update',
        'destroy' => 'admin.services.destroy',
    ]);

    // Testimonial Management Routes
    Route::resource('testimonials', TestimonialController::class)->names([
        'index' => 'admin.testimonials.index',
        'create' => 'admin.testimonials.create',
        'store' => 'admin.testimonials.store',
        'show' => 'admin.testimonials.show',
        'edit' => 'admin.testimonials.edit',
        'update' => 'admin.testimonials.update',
        'destroy' => 'admin.testimonials.destroy',
    ]);

    // Application Management Routes
    Route::get('applications', [ApplicationController::class, 'index'])->name('admin.applications.index');
    Route::get('applications/{application}', [ApplicationController::class, 'show'])->name('admin.applications.show');
});

// Application Submission Route (Frontend)
Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');


Route::prefix('admin')->group(function () {
    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('admin.profile');
});
