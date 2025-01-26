@extends('layouts.admin')

@section('title', 'Edit Testimonial')

@section('content')
    <div class="container card mt-5">
        <h1>Edit Testimonial</h1>
        <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $testimonial->name) }}" required>
            </div>
            <div class="mb-3">
                <label for="feedback" class="form-label">Feedback</label>
                <textarea name="feedback" id="feedback" class="form-control" rows="4" required>{{ old('feedback', $testimonial->feedback) }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
