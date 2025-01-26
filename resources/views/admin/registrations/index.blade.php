@extends('layouts.admin')

@section('title', 'Manage Registrations')

@section('content')
    <div class="container card mt-5">
        <h1>Manage Registrations</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Course</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registrations as $registration)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $registration->course->title }}</td>
                        <td>{{ $registration->name }}</td>
                        <td>{{ $registration->email }}</td>
                        <td>{{ $registration->phone }}</td>
                        <td>
                            <form action="{{ route('admin.registrations.destroy', $registration->id) }}" method="POST" style="display:inline-block;">
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
