@extends('dashlayout.master')
@section('title', 'Edit User')
@section('content')
<div class="admin-container">
    <h2>Edit User</h2>
    <form action="{{ url('userdash/' . $user->id) }}" method="POST" enctype="multipart/form-data" class="admin-form">
        @csrf
        @method("PATCH")
        <div class="admin-form-group">
            <input type="hidden" name="id" value="{{ $user->id }}" id="id">
        </div>
        <div class="admin-form-group">
            <label class="admin-label" for="name">Name:</label>
            <input class="admin-input" type="text" name="name" value="{{ $user->name }}" id="name">
            <span class="text-danger">
                @error('name')
                {{ $message }}
                @enderror
            </span>
        </div>

        <div class="admin-form-group">
            <label class="admin-label" for="email">Email:</label>
            <input class="admin-input" type="email" name="email" value="{{ $user->email }}" id="email">
            <span class="text-danger">
                @error('email')
                {{ $message }}
                @enderror
            </span>
        </div>

        <div class="admin-form-group">
            @if ($user->image)
            @endif
            <!-- Allow uploading a new image -->
            <label class="admin-label" for="image">Image:</label>
            <input class="admin-input" type="file" name="image" id="image" accept="image/*">
        </div>

        <div class="admin-form-group">
            <label class="admin-label" for="password">Password:</label>
            <input class="admin-input" type="password" name="password" id="password">
            <span class="text-danger">
                @error('password')
                {{ $message }}
                @enderror
            </span>
        </div>

        <div class="admin-form-group">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>

<br><br>
@endsection
