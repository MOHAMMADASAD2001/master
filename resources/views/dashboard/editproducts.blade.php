@extends('dashlayout.master')
@section('title','editproducts')
	@section('content')
    <div class="admin-container" >
        <h2>Edit product</h2>
        <form action="{{ url('productdash/' .$product->id) }}" method="POST" enctype="multipart/form-data" class="admin-form">
            @csrf
            @method("PATCH")
            <div class="admin-form-group">
                <input type="hidden" name="id" value="{{ $product->id }}" id="id">
            </div>
            <div class="admin-form-group">
                <label class="admin-label" for="name">Name:</label>
                <input class="admin-input" type="text" name="name" value="{{ $product->name }}" id="name">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            
            <div class="admin-form-group">
                <label class="admin-label" for="price">price:</label>
                <input class="admin-input" type="text" name="price" value="{{ $product->price }}" id="price">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
    
            <div class="admin-form-group">
                <label class="admin-label" for="description">Description:</label>
                <input class="admin-input" type="text" name="description" value="{{ $product->description }}" id="description">
                <span class="text-danger">
                    @error('description')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="admin-form-group">
                <label class="admin-label" for="discount">discount:</label>
                <input class="admin-input" type="text" name="discount" value="{{ $product->discount }}" id="discount">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
    
            <div class="admin-form-group">
                <label class="admin-label" for="category_id">category_id:</label>
                <input class="admin-input" type="text" name="category_id" value="{{ $product->category_id }}" id="category_id">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
    
    
            <div class="admin-form-group">
                @if ($product->image)
                <img src="{{ asset('img/' . $product->image) }}" alt="Existing Image" width="100" height="100"><br>
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