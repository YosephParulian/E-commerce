<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        return view('product',compact('products'));    
    }

    function detail($id)
    {
        $products = Product::find($id);
        return view('detail', ['products' => $products]);
    }

    function search(Request $request)
    {
        $products = Product::where('name', 'like', '%'.$request->input('query').'%')->get();
        return view('search', ['products' => $products]);
    }

    function addToCart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
}
