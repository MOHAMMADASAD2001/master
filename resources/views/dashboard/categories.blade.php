
@extends('dashlayout.master')
@section('title','dashboard')
	@section('content')




<div class="content-wrapper">
  @if(session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif
    <section class="user-section">
      <h2>Category lists</h2>
      <a href="{{ route('categorydash.create') }}" class="add-user-button">Add Category</a>

   
    </section>
  
    <table class="table">
      <thead>
        <tr>
          <th>Category ID</th>
          <th>Category Image</th>
          <th>Category Name</th>
          <th>Descirbtion</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>
                <img src="{{ $category->image}}" alt="{{ $category->name }} Image" width="100">
            </td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td class="action-buttons">
              <form method="POST" action="{{ url('/categorydash' . '/' . $category->id  ) }}" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-m" onclick="return confirm('Confirm Delete?')">Delete</button>
            </form>
                <a  class="btn btn-success" href="{{ route('categorydash.edit',$category->id)}}"> Edit </a>
              </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    
  </div>


  @endsection