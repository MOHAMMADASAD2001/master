@extends('dashlayout.master')
@section('title','orderdash')
	@section('content')
    <div class="content-wrapper">
        <section class="user-section">
          <h2>Order lists</h2>
        </section>
      
        <table class="table display" id="datatable">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User ID</th>
                    {{-- <th>Phone</th> --}}
                    <th>Address</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Total Price</th>
                    <th>Payment Method</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user_id }}</td>
                    {{-- <td>{{ $order->phone }}</td> --}}
                    <td>{{ $order->orderAddress }}</td>
                    <td>{{ $order->orderStatus }}</td>
                    <td>{{ $order->orderDate }}</td>
                    <td>{{ $order->totalPrice }}</td>
                    <td>{{ $order->orderPayment }}</td>
                    <td>
                        <a href="{{ route('orderdash.edit', $order->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
@endsection
