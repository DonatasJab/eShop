<?php

namespace App\Http\Controllers;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Cart;

class ProductsController extends Controller
{
    public function index()
    {
        return view('admin.products')->with([
            'products' => Product::all(),
            'category' => Category::join('products', 'categories.id', '=', 'products.category_id')->first(),
        ]);
    }

    public function getNewProduct()
    {
        return view('admin.newproduct')->with('categories', Category::all());
    }

    public function postNewProduct(Request $request)
    {  
        $this->validate($request, [
            'category_id'   => 'required',
            'title'         => 'required',
            'price'         => 'required|numeric',
            'description'   => 'required',
        ]);

        Product::create([
            'category_id'   => $request->input('category_id'),
            'title'         => $request->input('title'),
            'image'         => $request->input('image'),
            'price'         => $request->input('price'),
            'description'   => $request->input('description'),
        ]);

        return redirect()->route('admin.products')->with('info', 'Prekė sėkmingai pridėta');
    }

    public function getEditProduct($id)
    {
        Product::findOrFail($id);
        
        return view('admin.editproduct')->with([
            'product'       => Product::where('id', $id)->first(),
            'categories'    => Category::all(),
        ]);
    }

    public function postEditProduct(Request $request, $id)
    {
        $this->validate($request, [
            'category_id'   => 'required',
            'title'         => 'required',
            'price'         => 'required|numeric',
            'description'   => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->slug = null;
        $product->update($request->only(['category_id', 'title', 'image', 'price', 'description']));

        return redirect()->route('admin.products')->with('info', 'Produktas sėkmingai atnaujintas!');
    }

    public function deleteProduct(Request $request, $id)
    {
        Product::findOrFail($id);
        Product::where('id', $id)->delete();

        return redirect()->back()->with('info', 'Produktas sėkmingai ištrintas!');
    }

    public function getProduct($category, $slug)
    {
        Product::findBySlugOrFail($slug);

        $product = Product::whereSlug($slug)->first();
        $items = Cart::content();

        return view('template.viewproduct')->with([
            'product'       => $product,
            'categories'    => Category::all(),
            'total'         => Cart::subtotal(),
            'items'         => $items,
        ]);
    }

}
