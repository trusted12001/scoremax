@extends('layouts.admin')

@section('title', 'Add Service')

@section('content')
    <div class="container card mt-5">
        <h1>Add New Service</h1>
        <form action="{{ route('admin.services.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Service Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" rows="4" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Service</button>
        </form>
    </div>
@endsection
