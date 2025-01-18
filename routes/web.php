<?php

use Illuminate\Support\Facades\Route;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Course;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/', function () {
    $courses = Course::all();
    $services = Service::all();
    $testimonials = Testimonial::all();
    return view('frontend.home', compact('courses', 'services', 'testimonials'));
});



//Route for the admin dashboard
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});



