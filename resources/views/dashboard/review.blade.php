@extends('dashlayout.master')
@section('title','reviewdash')
	@section('content')
    <div class="content-wrapper">
        <section class="user-section">
          <h2>Review lists</h2>
        </section>
      
        <table class="table display" id="datatable">
          <thead>
            <tr>
              <th>Review ID</th>
              <th>Rating</th>
              <th>Comment</th>
              <th>User_id</th>
              <th>product_id</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($reviews as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->rating }}</td>
                <td>{{ $item->comment }}</td>
                <td>{{ $item->user_id }}</td>
                <td>{{ $item->product_id }}</td>
                <td class="action-buttons">
                  <form method="POST" action="{{ url('/reviewdash' . '/' . $item->id  ) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-m" onclick="return confirm('Confirm Delete?')">Delete</button>
                </form>
                  </td>
            </tr>
            @endforeach  
          </tbody>
        </table>
        
      </div>
    
    
@endsection    