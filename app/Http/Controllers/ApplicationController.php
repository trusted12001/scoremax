<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Course;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'course_id' => 'required|exists:courses,id',
            'message' => 'nullable|string',
        ]);

        // Store the application
        Application::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your application has been submitted successfully.');
}
    public function index()
    {
        $applications = Application::with('course')->get();
        return view('admin.applications.index', compact('applications'));
    }

    public function show(Application $application)
    {
        return view('admin.applications.show', compact('application'));
    }
}
