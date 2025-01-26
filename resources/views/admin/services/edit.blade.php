@extends('layouts.admin')

@section('title', 'Edit Service')

@section('content')
    <div class="container card mt-5">
        <h1>Edit Service</h1>
        <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Service Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $service->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" rows="4" class="form-control">{{ $service->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Update Service</button>
        </form>
    </div>
@endsection
