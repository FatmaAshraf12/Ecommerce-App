<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index(){

        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id){
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }

    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart();
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');

        }
        else{
            return redirect('/login');
        }
    }



    static function cartItemCount(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }


    function cartList(){
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cart' , ['products'=>$products]);
    }

    function removeItem($id){
        Cart::destroy($id);
        return redirect('cart');
    }

    function createOrder(){
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('checkout',['total'=> $products]);
    }



    function xx(Request $req){
        $userId = Session::get('user')['id'];
        $allcart = Cart::where('user_id',$userId)->get();

        foreach($allcart as $cart){
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete(); 
        }
        
          $req->input();
         return redirect('/');
    }


    function ordersList(){
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();

         return view('orders',['orders'=>$orders]);
    }
}
