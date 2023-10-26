<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardProductsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::with(['galleries', 'category'])
            ->where('users_id', Auth::user()->id)
            ->get();

        return view('pages.dashboard-products', [
            'products' => $products
        ]);
    }

    public function details()
    {
        return view('pages.dashboard-products-details');
    }

    public function create()
    {
        return view('pages.dashboard-products-create');
    }
}
