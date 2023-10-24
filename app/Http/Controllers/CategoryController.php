<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all(); // Get all categories
        $products = Product::with(['galleries'])->paginate(32); // Get all products with relation to galleries table
        return view('pages.category', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function detail(Request $request, $slug)
    {
        $categories = Category::all(); // Get all categories
        $category = Category::where('slug', $slug)->firstOrFail(); // Get category by slug
        $products = Product::with(['galleries'])->where('categories_id', $category->id)->paginate(32); // Get all products with relation to galleries table
        return view('pages.category', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
