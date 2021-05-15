<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('product',['products' => $products]);
    }

    public function detail($id){
        $product = Product::find($id);

        return view('detail',['product' => $product]);
    }

    public function search(Request $request){

        $search = Product::where('name', 'like', '%'.$request->input('query').'%')->get();

        return view('search', ['search' => $search]);
    }

    public function addToCart(Request $request){

        if($request->session()->has('user')){
            $cart =  new Cart();
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        }else{
            redirect("/login");
        }

    }

    public static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

}
