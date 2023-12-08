<?php
// app/CartService.php

namespace App;

use App\Models\Cart;

class CartService
{
    public static function getItemCount()
    {
        return Cart::count();
    }
}