<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function index()
    {
        $registrations = Registration::with('course')->get();
        return view('admin.registrations.index', compact('registrations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'course_id' => 'required|exists:courses,id',
        ]);

        Registration::create($request->all());

        return redirect()->back()->with('success', 'You have successfully registered for the course!');
    }



    public function destroy($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->delete();

        return redirect()->route('admin.registrations.index')->with('success', 'Registration deleted successfully.');
    }

}
