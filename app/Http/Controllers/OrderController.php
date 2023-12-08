<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Cart;
use \Illuminate\Http\Request;
use App\Http\Requests\UpdateOrderRequest;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return view('dashboard.order', compact('order'));
    }
    public function checkout()
    {
        $cartItems = Cart::with('product')->get();
        $subtotal = 0;

        foreach ($cartItems as $cartItem) {
            $subtotal += $cartItem->product->price * $cartItem->quantity;
        }

        $shippingCost = $subtotal > 50 ? 0 : 3;
        $total = $subtotal + $shippingCost;


        return view('pages.checkout', compact('cartItems', 'total'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }



    public function store(Request $request)
    {


        $order = new Order();
        $order->user_id = $request->userId;
        $order->orderAddress = $request->city . ', ' . $request->houseadd . ', ' . $request->apartment;
        $order->orderStatus = 'pending';
        $order->orderDate = Carbon::now();
        $order->totalPrice = $request->totalPrice;

        // Check the payment method and set orderPayment accordingly
        if ($request->dbt === 'cd') {
            $order->orderPayment = 'Cash on Delivery';
        } elseif ($request->dbt === 'paypal') {
            $order->orderPayment = 'Paid via Paypal';
        } else {
            // Handle other payment methods if needed
            $order->orderPayment = 'Other Payment Method';
        }
        Cart::truncate();
        $order->save();
        // return redirect('/thankyou')->with('success', 'Order placed successfully!');
        return redirect('/')->with('success', 'Order placed successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('dashboard.editorder', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'orderStatus' => 'required|in:pending,on_way,delivered',
            // Add other validation rules if needed
        ]);

        $order = Order::find($id);

        if (!$order) {
            return redirect()->route('orderdash')->with('error', 'Order not found');
        }

        $order->orderStatus = $request->orderStatus;
        $order->save();
        return redirect('orderdash')->with('success', 'Order updated successflly');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
