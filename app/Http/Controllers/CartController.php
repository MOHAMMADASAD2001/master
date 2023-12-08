<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // Import the DB facade
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product; // Import the Product model


class CartController extends Controller
{

    public function index()
    {
        // Retrieve cart items with their corresponding product details
        $cartItems = Cart::all();
        $productIds = $cartItems->pluck('product_id')->toArray();
        $products = Product::whereIn('id', $productIds)->get();

        return view('dashboard.cart', ['cartItems' => $cartItems, 'products' => $products]);
    }


    public function addToCart(Request $request)
    {
        // Get the product details from the request
        $product_id = $request->input('product_id');
        $product_name = $request->input('product_name');
        $product_price = $request->input('product_price');

        // Create a new Cart item or update quantity if it already exists
        $cartItem = Cart::where('product_id', $product_id)->first();

        if ($cartItem) {
            // Update quantity if the item already exists in the cart
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            // Create a new cart item
            Cart::create([
                'product_id' => $product_id,
                'product_name' => $product_name,
                'quantity' => 1,
                'price' => $product_price,
            ]);
        }

        // Redirect back to the product page or cart page
        return redirect()->back()->with('success', 'Product added to cart');
    }

    // You can add more methods for updating and removing items from the cart as needed

    // Example of removing an item from the cart
    public function removeItem(Request $request, $id)
    {
        Cart::destroy($id);

        return redirect()->route('cart.index')->with('success', 'Product removed from cart');
    }


    public function viewCart()
    {
        // Retrieve cart items (adjust this to your cart storage logic)
        $cartItems = Cart::all();

        $productIds = $cartItems->pluck('product_id')->toArray();
        $products = DB::table('products')->whereIn('id', $productIds)->get();
        return view('pages.cart', ['cartItems' => $cartItems, 'products' => $products]);

    }

    public function updateQuantity(Request $request, $item_id)
    {
        // Validate and update the quantity in your cart
        $cartItem = Cart::findOrFail($item_id);
        if ($request->input('quantity_action') === 'increase') {
            $cartItem->quantity += 1;
        } elseif ($request->input('quantity_action') === 'decrease' && $cartItem->quantity > 1) {
            $cartItem->quantity -= 1;
        }
        $cartItem->save();

        // Redirect back to the cart page or wherever you want
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the cart item by its ID
        $cartItem = Cart::find($id);

        if ($cartItem) {
            // Delete the cart item
            $cartItem->delete();

            // Optionally, you can return a response or redirect back
            return redirect('cart')->with('success', 'Item deleted successfully');
        }
    }
   
}