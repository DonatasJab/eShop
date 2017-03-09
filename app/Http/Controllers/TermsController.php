<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Cart;

class TermsController extends Controller
{
    public function index()
    {
        $items = Cart::content();

        return view('template.terms')->with([
            'categories'    => Category::all(),
            'total'         => Cart::subtotal(),
            'items'         => $items,
        ]);
    }
}
