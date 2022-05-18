<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Cart;
use App\Models\Order;


class HomeController extends Controller
{
    public function index(){
        

        if(Auth::id())
        {
            return redirect('redirect');
        }
        else{
            $data = Food::all();
            $data1 = Foodchef::all();
            $user_id = Auth::id();
            $conunt=Cart::where('user_id',$user_id)->count();
            return view('home',compact('data','data1','conunt'));
      }
    }

    public function redirect(){
        $data = Food::all();
        $data1 = Foodchef::all();
        

        if(Auth::user()->usertype == '1'){
            return view('admin.admin');
        }else{

       $user_id = Auth::id();
       $conunt=Cart::where('user_id',$user_id)->count();
        return view('home',compact('data','data1','conunt'));
        }
        
    }
    public function cart($id){
        $data = Food::find($id);
        return view('cart',compact('data'));
    }

    public function order_cart(Request $req,$id){
       
       if(Auth::id()){
        $user_id = Auth::id();
        $food_id = $id;
        $Cart = new Cart;
        	
        $Cart->user_id = $user_id;
        $Cart->food_id = $food_id;
        $Cart->quinity = $req->quinity;
        $Cart->save();
        return redirect('/');

       }else{
        return redirect('/login');
       }
        
    }
    public function showcard($id){
       $user_id = Auth::id();
       $data2 = cart::select('*')->where('user_id','=',$id)->get();
       $data = Cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();
       $conunt=Cart::where('user_id',$user_id)->count();
        return view('showcard',compact('conunt','data','data2'));
    }
    public function deletefood1($id){
        $users = Cart::find($id);
        $users->delete();
        return redirect()->back();
    }
    public function updateOrder(Request $req){

        foreach($req->foodname as $key =>$foodname){

            $data = new Order;
            $data->foodname = $foodname;
            $data->price = $req->price[$key];
            $data->quinity = $req->quinity[$key];
            $data->name = $req->name;
            $data->phone = $req->phone;
            $data->address = $req->address;
            $data->save();
            
        }
        return redirect()->back();
    }

}

