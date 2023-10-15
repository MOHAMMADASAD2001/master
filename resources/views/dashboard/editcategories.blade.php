@extends('dashlayout.master')
@section('title','createcategories')
	@section('content')
    <div class="admin-container" >
        <h2>Edit Category</h2>
        <form action="{{ url('categorydash/' .$category->id) }}" method="POST" enctype="multipart/form-data" class="admin-form">
            @csrf
            @method("PATCH")
            <div class="admin-form-group">
                <input type="hidden" name="id" value="{{ $category->id }}" id="id">
            </div>
            <div class="admin-form-group">
                <label class="admin-label" for="name">Name:</label>
                <input class="admin-input" type="text" name="name" value="{{ $category->name }}" id="name">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
    
            <div class="admin-form-group">
                <label class="admin-label" for="description">Description:</label>
                <input class="admin-input" type="text" name="description" value="{{ $category->description }}" id="description">
                <span class="text-danger">
                    @error('description')
                        {{ $message }}
                    @enderror
                </span>
            </div>
    
            <div class="admin-form-group">
                @if ($category->image)
                <img src="{{ asset('img/' . $category->image) }}" alt="Existing Image" width="100" height="100"><br>
                @endif
                <!-- Allow uploading a new image -->
                <label class="admin-label" for="image">Image:</label>
                <input class="admin-input" type="file" name="image" id="image" accept="image/*">
            </div>
    
            <div class="admin-form-group">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
    
<br><br>
@endsection