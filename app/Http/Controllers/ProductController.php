<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::all();
        return view('dashboard.product')->with('products', $products);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product($category_id)
    {
        // Fetch products based on $category_id from the products table
        $product = Product::where('category_id', $category_id)->paginate(9);

        // Pass the products and category_id to the view
        return view('pages.cat', compact('product', 'category_id'));
    }

    public function allProducts()
    {
        $product = Product::paginate(9); // Fetch all products, paginated

        return view('pages.cat', compact('product'));
    }


    // public function single($id)
    // {
    //     $product = product::find($id);


    //     return view('pages.single', compact('product'));
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.createproducts');

    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'discount' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);


        $product = [
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'discount' => $request->discount,
            'category_id' => $request->category_id,

        ];

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $product['image'] = $filename;
        }

        Product::create($product);

        return redirect('productdash')
            ->with('success', 'product added successflly');


    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('dashboard.editproducts')->with('product', $product);
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'discount' => 'required',
            'category_id' => 'required',
            // Correct the field name here
            'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);

        $product = [
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'discount' => $request->discount,
            'category_id' => $request->category_id,
            // Correct the field name here
        ];

        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $product['image'] = $filename;
        } else {
            unset($product['image']);
        }

        Product::where('id', $id)->update($product); // Simplify the 'where' condition
        return redirect('productdash')->with('success', 'Product updated successfully');
    }



    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('productdash')->with('success', 'product deleted successfully');
    }

    public function search(Request $request)
    {
        $query = Product::query();



        // Handle search query
        if ($request->has('name1')) {
            $query->where('name', 'LIKE', '%' . $request->name1 . '%');
        }

        // Get paginated results
        $product = $query->paginate(9);

        return view('pages.cat', compact('product'));
    }
    public function filterByCategory(Request $request, $category_id)
    {
        $query = Product::where('category_id', $category_id);

        // Handle other filters if required

        $product = $query->paginate(9);

        return view('pages.cat', compact('product', 'category_id'));
    }
    public function filterProducts(Request $request)
    {
        $priceRange = $request->input('price_range');
        $minPrice = null;
        $maxPrice = null;

        if ($priceRange) {
            list($minPrice, $maxPrice) = explode('-', $priceRange);
        }

        $product = Product::query();

        if ($minPrice !== null && $maxPrice !== null) {
            $product->whereBetween('price', [$minPrice, $maxPrice]);
        }

        $product = $product->paginate(9);
        if ($product->isEmpty()) {
            return view('pages.cat', compact('product'))->with('message', 'No matching products found.');
        }

        return view('pages.cat', compact('product'));
    }
    public function single($id)
    {
        // Get product details for the given product ID
        $product = Product::find($id);

        // Get reviews associated with the given product ID and eager load the user relationship
        $reviews = Review::with('user')->where('product_id', $id)->get();

        // Pass both product and reviews data to the view
        return view('pages.single', compact('product', 'reviews'));
    }
}
