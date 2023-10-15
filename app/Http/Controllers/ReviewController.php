<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\UpdateReviewRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Get the currently authenticated user's ID
        $userId = Auth::id();
    
        // Get the product ID (you need to replace 'product_id' with the actual way you determine the product)
        $productId = $request->input('product_id');
    
        // Create a new review record in the database
        $review = new Review();
        $review->user_id = $userId;
        $review->product_id = $productId;
        $review->rating = $request->input('rating');
        $review->comment = $request->input('review'); // Use 'comment' to match the column name
        $review->save();
    
        // Redirect to a success page or return a response
        // You can customize this based on your needs
        return back()->with('success', 'Review added successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReviewRequest  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
