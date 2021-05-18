<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
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
                            ->select('products.*', 'cart.id as cart_id')->get();

        return view('cartList', ['products' => $products]);

    }

    public function remove($id){
        Cart::destroy($id);
        return redirect('/cartlist');
    }

    public function orderNow(){
        $loggedInUserId = Session::get('user')['id'];

        $total = $products = DB::table('cart')
                            ->join('products', 'cart.product_id', '=', 'products.id')
                            ->where('cart.user_id', $loggedInUserId)
                            ->sum('products.price');

        return view('orderNow',['total' => $total]);

    }

    public function placeOrder(Request $request){

        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();

        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "successful";
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }

        return redirect('/');
    }


    public function orders(){
        $loggedInUserId = Session::get('user')['id'];

        $orders = $products = DB::table('orders')
                            ->join('products', 'orders.product_id', '=', 'products.id')
                            ->where('orders.user_id', $loggedInUserId)
                            ->get();

        return view('orders', ['orders' => $orders]);
    }

}
