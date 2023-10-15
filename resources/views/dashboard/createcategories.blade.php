@extends('dashlayout.master')
@section('title','createcategories')
	@section('content')

<div class="admin-container">
    <h2>Add Category</h2>
    <form action="{{ route('categorydash.store') }}" method="post"  class="admin-form" enctype="multipart/form-data"> 
        @csrf 
        <div class="admin-form-group">
            <label class="admin-label" for="name">Name:</label>
            <input class="admin-input" type="text" id="name" name="name" required>
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
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
<br><br>
@endsection