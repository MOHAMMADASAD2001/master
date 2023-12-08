<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;

class CountController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $users = User::all();
        $categories = Category::all();

        return view('dashboard.home', compact('users', 'products', 'categories'));
    }
}