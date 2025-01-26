@extends('layouts.admin')

@section('title', 'Edit Course')

@section('content')
    <div class="container card mt-5">
        <h1>Edit Course</h1>
        <form action="{{ route('admin.courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Course Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Course Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $course->title) }}" required>
            </div>

            <!-- Short Description -->
            <div class="mb-3">
                <label for="short_description" class="form-label">Short Description</label>
                <textarea name="short_description" id="short_description" class="form-control">{{ old('short_description', $course->short_description) }}</textarea>
            </div>

            <!-- Full Description -->
            <div class="mb-3">
                <label for="full_description" class="form-label">Full Description</label>
                <textarea name="full_description" id="full_description" class="form-control" rows="5">{{ old('full_description', $course->full_description) }}</textarea>
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ old('price', $course->price) }}" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success">Update Course</button>
            <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
