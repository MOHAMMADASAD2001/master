@extends('dashlayout.master')
@section('title','cartdash')
	@section('content')
    <div class="content-wrapper">
        <section class="user-section">
          <h2>Cart lists</h2>
          {{-- <button class="add-user-button">Add Admin</button> --}}
        </section>
      
        <table class="table display" id="datatable">
          <thead>
              <tr>
                  <th>Cart ID</th>
                  <th>Quantity</th>
                  <th>Product ID</th>
                  <th>Product Image</th>
                  <th>Product Price</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($cartItems as $item)
              <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->quantity }}</td>
                  <td>{{ $item->product_id }}</td>
                  <td>
                      @foreach ($products as $product)
                          @if ($product->id === $item->product_id)
                              <img src="{{ asset('path/to/product/images/' . $product->image) }}" alt="Product Image" width="100" height="100">
                          @endif
                      @endforeach
                  </td>
                  <td>
                      @foreach ($products as $product)
                          @if ($product->id === $item->product_id)
                              {{ $product->price }}
                          @endif
                      @endforeach
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
      
        
      </div>
    
    
@endsection    