@extends('layouts.admin')

@section('title', 'Testimonials')

@section('content')
    <div class="container">
        <h1>Testimonials</h1>
        <a href="{{ route('testimonials.create') }}" class="btn btn-primary">Add Testimonial</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Feedback</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->feedback }}</td>
                        <td>
                            <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
