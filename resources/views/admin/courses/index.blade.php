@extends('layouts.admin')

@section('title', 'Courses Management')

@section('content')
    <div class="container card mt-5">
        <h1>Courses Management</h1>
        <a href="{{ route('admin.courses.create') }}" class="col-md-4 btn btn-primary mb-3">Add New Course</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="row">
            @foreach ($courses as $course)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <p class="card-text">{{ $course->short_description }}</p>
                            <p class="card-text"><strong>Price:</strong> ${{ $course->price }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are sure you want to delete?');">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
