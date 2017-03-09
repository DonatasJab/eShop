<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Address;
use App\Models\Order;
use Auth;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::content();

        return view('template.viewcart')->with([
            'categories'    => Category::all(),
            'total'         => Cart::subtotal(),
            'items'         => $items,
        ]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        Cart::add($product->id, $product->title, '1', $product->price, ['image' => $product->image, 'slug' => $product->slug, 'category_id' => $product->category_id]);

        return redirect()->back();
    }

    public function deleteItem($id)
    {
        Cart::remove($id);

        return redirect()->back();
    }

    public function getCheckout()
    {
        $items = Cart::content();

        if(!Auth::check()) {

            return view('template.login')->with([
                'categories'    => Category::all(),
                'total'         => Cart::subtotal(),
                'items'         => $items,
            ]);

        }

        return view('template.checkout')->with([
            'categories'    => Category::all(),
            'addresses'     => Address::where('user_id', Auth::user()->id)->get(),
            'total'         => Cart::subtotal(),
            'items'         => $items,
        ]);
    }

    public function postCheckout(Request $request)
    {
        $this->validate($request, [
            'address'   => 'required',    
        ]);

        Order::create([
            'user_id'       => Auth::user()->id,
            'address_id'    => $request->input('address'),
            'quantity'      => Cart::count(),
            'total'         => Cart::subtotal(),
        ]);

        Cart::destroy();

        return redirect()->route('profile.orders');

    }
}
