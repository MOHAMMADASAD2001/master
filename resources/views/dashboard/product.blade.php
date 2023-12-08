@extends('dashlayout.master')
@section('title','products')
	@section('content')


    <div class="content-wrapper">
        <section class="user-section">
          <h2>Product lists</h2>
          <a href="{{ route('productdash.create') }}" class="add-user-button">Add Product</a> 
               </section>
      
               <table class="table display" id="datatable">
                <thead>
            <tr>
              <th>Product ID</th>
              <th>product Image</th>
              <th>product Name</th>
              <th>product price</th>
              <th>Descirbtion</th>
              <th>category_id</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>
                    <img src="{{ $product->image}}" alt="{{ $product->name }} Image" width="100">
                </td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category_id }}</td>
                <td class="action-buttons">
                  <form method="POST" action="{{ url('/productdash' . '/' . $product->id  ) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-m" onclick="return confirm('Confirm Delete?')">Delete</button>
                </form>
                    <a  class="btn btn-success" href="{{ route('productdash.edit',$product->id)}}"> Edit </a>
                  </td>
            </tr>
            @endforeach
      
        </table>
        
      </div>
    







    @endsection