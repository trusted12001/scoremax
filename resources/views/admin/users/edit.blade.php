@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')
<div class="container card mt-5">
    <h1>Edit User</h1>
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" id="role" class="form-control">
                <option value="0" {{ !$user->is_admin ? 'selected' : '' }}>User</option>
                <option value="1" {{ $user->is_admin ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="1" {{ $user->active ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$user->active ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>
@endsection
