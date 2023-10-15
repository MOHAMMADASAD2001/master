@extends('dashlayout.master')
@section('title','createproducts')
	@section('content')

<div class="admin-container">
    <h2>Add Product</h2>
    <form action="{{ route('productdash.store') }}" method="post"  enctype="multipart/form-data"  class="admin-form" >
        @csrf 
        <div class="admin-form-group">
            <label class="admin-label" for="name">Name:</label>
            <input class="admin-input" type="text" id="name" name="name" required>
        </div>
       
        <div class="admin-form-group">
            <label class="admin-label" for="price">Price:</label>
            <input class="admin-input" type="text" id="price" name="price" required>
        </div>
        <div class="admin-form-group">
            <label class="admin-label" for="description">Description:</label>
            <input class="admin-input" type="text" id="description" name="description" required>
        </div>
        <div class="admin-form-group">
            <label class="admin-label" for="image">Image</label>
            <input class="admin-input" type="file" id="image" name="image" accept="image/*" required>
        </div>
         
        <div class="admin-form-group">
            <label class="admin-label" for="discount">discount:</label>
            <input class="admin-input" type="text" id="discount" name="discount" required>
        </div>
        <div class="admin-form-group">
            <label class="admin-label" for="category_id">category_id:</label>
            <input class="admin-input" type="text" id="category_id" name="category_id" required>
        </div>
        <div class="admin-form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
<br><br>
@endsection