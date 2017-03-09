<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Cart;

class ContactsController extends Controller
{
    public function index()
    {
        $items = Cart::content();

        return view('template.contacts')->with([
            'categories'    => Category::all(),
            'total'         => Cart::subtotal(),
            'items'         => $items,
        ]);
    }
}
