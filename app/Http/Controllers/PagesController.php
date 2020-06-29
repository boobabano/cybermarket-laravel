<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Session;


class PagesController extends Controller
{
    
    public function getLogin(){

        return view('pages.login');
    }

    public function postLogin(Request $request){

        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);
           if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
               if(Session::has('oldUrl')){
                   $oldUrl = Session::get('oldUrl');
                   Session::forget('oldUrl');
                   return redirect()->to($oldUrl);
               }
                return redirect()->route('pages.userBoard');
           }
           return redirect()->back();
    }


    public function getRegister(){

        return view('pages.register');
    }

    
    public function postRegister(Request $request){
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();

        Auth::login($user);
        if(Session::has('oldUrl')){
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }
        return redirect()->route('pages.userBoard');
    }

    public function getUserBoard(){
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key){
        $order->cart = unserialize($order->cart);
        return $order;    
        });
         return view('pages.userBoard', ['orders' => $orders]);
    }
    public function getLogout(){

        Auth::logout();
        return redirect()->route('pages.login');
    }
    
}
