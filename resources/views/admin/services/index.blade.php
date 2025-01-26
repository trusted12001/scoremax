@extends('layouts.admin')

@section('title', 'Services Management')

@section('content')
    <div class="container card mt-5">
        <h1>Services Management</h1>
        <a href="{{ route('admin.services.create') }}" class="col-md-4 btn btn-primary mb-3">Add New Service</a>

        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->title }}</h5>
                            <p class="card-text">{{ $service->description }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?');">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
