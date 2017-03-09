<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Cart;

class HomeController extends Controller
{
    public function index()
    {
        $items = Cart::content();

        return view('template.home')->with([
            'products'      => Product::LIMIT(12)->get(),
            'categories'    => Category::all(),
            'total'         => Cart::subtotal(),
            'items'         => $items,
        ]);
    }
}
