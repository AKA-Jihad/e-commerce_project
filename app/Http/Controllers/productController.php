<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class productController extends Controller
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

    static function cartItem(){
        $userID = Session::get('user')['id'];
        return Cart::where('user_id', $userID)->count();
    }

    function cartlist(){
        $userID = Session::get('user')['id'];
        $products = DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userID)
        ->select('products.*','carts.id as cart_id')
        ->get();
        return view('/cartlist',['products'=>$products]);
    }
    function removecart($id){
        Cart::destroy($id);
        return redirect('/cartlist');
    }


    function ordernow(){
        $userID = Session::get('user')['id'];
        $total = $products = DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userID)
        ->sum('products.price');
        return view('/ordernow',['total'=>$total]);
    }

    function orderplace(Request $req){
        $userID = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userID)->get();
        foreach ($allCart as $cart){
            $order = New Order;
            $order->first_name = $req->first_name;
            $order->last_name = $req->last_name;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payment_method = $req->payment_method;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->city = $req->city;
            $order->zip = $req->zip;
            $order->save();
            Cart::where('user_id',$userID)->delete();
        }
        $req->input();
        return redirect('/');
    }

    function myorders(){
        $userID = Session::get('user')['id'];
        $orders = $products = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userID)
        ->get();
        return view('orders',['orders'=>$orders]);
    }
}
