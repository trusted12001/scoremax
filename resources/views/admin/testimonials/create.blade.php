@extends('layouts.admin')

@section('title', 'Add New Testimonial')

@section('content')
    <div class="container card mt-5">
        <h1>Add New Testimonial</h1>
        <form action="{{ route('admin.testimonials.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="feedback" class="form-label">Feedback</label>
                <textarea name="feedback" id="feedback" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
