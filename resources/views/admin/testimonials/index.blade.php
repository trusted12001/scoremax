@extends('layouts.admin')

@section('title', 'Testimonials Management')

@section('content')
    <div class="container card mt-5">
        <h1>Testimonials Management</h1>
        <a href="{{ route('admin.testimonials.create') }}" class="col-md-4 btn btn-primary mb-3">Add New Testimonial</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Feedback</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->feedback }}</td>
                        <td>
                            <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
