@extends('dashlayout.master')
@section('title','admindash')
	@section('content')
    <div class="content-wrapper">
        <section class="user-section">
          <h2>Admin lists</h2>
          <a href="{{ route('admindash.create') }}" class="add-user-button">Add Admin</a>
        </section>
      
        <table class="table display" id="datatable">
          <thead>
            <tr>
              <th>Admin ID</th>
              <th>Image</th>
              <th>Admin Name</th>
              <th>Admin email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($admin as $item)
            <tr>
              
                <td>{{ $item->id }}</td>
             
                <td>
                  <img src="{{ $item->image}}" alt="{{ $item->name }} Image" width="100">
              </td>
                </td>
                
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td class="action-buttons">
                  <form method="POST" action="{{ url('/admindash' . '/' . $item->id  ) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-m" onclick="return confirm('Confirm Delete?')">Delete</button>
                </form>
                    <a  class="btn btn-success" href="{{ route('admindash.edit',$item->id)}}"> Edit </a>
                  </td>
            </tr>
            @endforeach  
          </tbody>
        </table>
        
      </div>
    
    
@endsection    