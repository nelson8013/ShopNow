<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

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
           return  redirect("/login");
        }

    }

    public static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    public function cartList(){
        //get loggedIn user from session
        $loggedInUserId = Session::get('user')['id'];

        /* get all the products in the cart table that belong to a user */

        $products = DB::table('cart')
                            ->join('products', 'cart.product_id', '=', 'products.id')
                            ->where('cart.user_id', $loggedInUserId)
                            ->select('products.*')->get();

        return view('cartList', ['products' => $products]);


    }

}
