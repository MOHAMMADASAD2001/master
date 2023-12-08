@extends('dashlayout.master')
@section('title', 'Edit Order')
@section('content')
<div class="admin-container">
    <h2>Edit Order #{{ $order->id }}</h2>
    <form action="{{ route('orderdash.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="form-group">
            <label for="orderStatus">Order Status:</label>
            <select class="form-control" id="orderStatus" name="orderStatus" required>
                <option value="pending" {{ $order->orderStatus === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="on_way" {{ $order->orderStatus === 'on_way' ? 'selected' : '' }}>On Way</option>
                <option value="delivered" {{ $order->orderStatus === 'delivered' ? 'selected' : '' }}>Delivered</option>
            </select>
        </div> <br>
    
        <button type="submit" class="btn btn-primary">Update Order Status</button>
    </form>
    
</div>
@endsection
