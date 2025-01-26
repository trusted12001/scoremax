@extends('layouts.admin')

@section('title', 'Add New Course')

@section('content')
    <div class="container card mt-5">
        <h1>Add New Course</h1>
        <form action="{{ route('admin.courses.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Course Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="mb-3">
                <label for="short_description" class="form-label">Short Description</label>
                <input type="text" name="short_description" class="form-control" id="short_description">
            </div>
            <div class="mb-3">
                <label for="full_description" class="form-label">Full Description</label>
                <textarea name="full_description" class="form-control" id="full_description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" class="form-control" id="price" step="0.01">
            </div>
            <button type="submit" class="btn btn-primary">Save Course</button>
        </form>
    </div>
@endsection
