<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;


class CartController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $carts = Cart::with(['product.galleries', 'user'])
            ->where('users_id', Auth::user()->id)
            ->get();
        return view('pages.cart', [
            'carts' => $carts
        ]);
    }

    public function delete(Request $request, $id)
    {
        $carts = Cart::findOrFail($id);
        $carts->delete();

        return redirect()->route('cart');
    }

    public function success()
    {
        return view('pages.success');
    }
}
