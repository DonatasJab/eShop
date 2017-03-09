<?php

namespace App\Http\Controllers;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Cart;

class CategoryController extends Controller
{
    public function index() 
    {
        return view('admin.categories')->with('categories', Category::get());
    }

    public function getNewCategory()
    {
        return view('admin.newcategory')->with('categories', Category::get());
    }

    public function postNewCategory(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        Category::create([
            'title' => $request->input('title'),
        ]);

        return redirect()->route('admin.categories')->with('info', 'Kategorija sėkmingai pridėta!');
    }

    public function getEditCategory($id)
    {
        Category::findOrFail($id);
        
        return view('admin.editcategory')->with('category', Category::where('id', $id)->first());
    }

    public function postEditCategory(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $category->slug = null;
        $category->update($request->only(['title']));

        return redirect()->route('admin.categories')->with('info', 'Kategorija sėkmingai atnaujinta!');
    }

    public function deleteCategory(Request $request, $id)
    {
        Category::findOrFail($id);
        Category::where('id', $id)->delete();

        return redirect()->back()->with('info', 'Kategorija sėkmingai ištrinta!');
    }

    public function getProductsByCategory($slug)
    {
        Category::findBySlugOrFail($slug);

        $products = Category::join('products', 'categories.id', '=', 'products.category_id')->where('categories.slug', $slug)->get();

        $items = Cart::content();

        return view('template.products')->with([
            'products'      => $products,
            'categories'    => Category::all(),
            'category'      => Category::whereSlug($slug)->first(),
            'total'         => Cart::subtotal(),
            'items'         => $items,
        ]);
    }
}
