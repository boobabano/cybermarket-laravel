<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Session;
use Auth;
use App\Order;
use App\Cart;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Support\Facades\DB;



class ItemController extends Controller
{
    public function getItems(){

        $items = Item::all();
        return view ('pages.items',['items' => $items]);
    }

    public function getIndex(){

        return view('pages.index');
    }

    public function getAddToCart(Request $request, $id){
        $item = Item::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($item, $item->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('pages.items');

    }

    public function getAddByOne(Request $request, $id){
        $item = Item::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($item, $item->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('item.cart');

    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if(count($cart->items) >0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('item.cart');
    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) >0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }

        
        return redirect()->route('item.cart');
    }

    public function getOrderClear($id){

        return view('pages.userBoard');

    }


    public function getCart(){
        if(!Session::has('cart')){
            return view('buy.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('buy.cart', ['items' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
    public function getCheckout(){
        if(!Session::has('cart')){
            return view('buy.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('buy.checkout', ['total' => $total]);

    }

    public function postCheckout(Request $request){

       
        if(!Session::has('cart')){
            return redirect()->route('buy.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_vRy5cRC7uN2toaCTDt4D93x1');

       // dd($request->all());
        try{
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "cad",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Test charge"
              ));
              $order = new Order();
              $order->cart = serialize($cart);
              $order->adress = $request->input('adress');
              $order->name = $request->input('name');
              $order->payment_id = $charge->id;

              Auth::user()->orders()->save($order);

        }catch(\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        return redirect()->route('pages.items')->with('success', 'Successfully purchased products');
    }

    public function getDetails($id){
        
        $movie = Item::find($id);
        
        //dd($item);
        return view('pages.details',['movie' => $movie]);
    }
    
}
