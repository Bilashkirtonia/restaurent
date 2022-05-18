<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
use App\Models\Cart;
use App\Models\Order;
class AdminController extends Controller
{
    public function users(){
        $users = user::all();
        return view('admin.userList',compact('users')); 
    }
    public function deleteUser($id){
        $users = user::find($id);
        $users->delete();
        return redirect()->back(); 
    }

    public function foodmenu(){
        return view('admin.foodmenu');
    }

    
    public function insertfood(Request $req){
    
        $data = new Food;
        $image = $req->image;
        $imagename = time().'-'.$image->getClientOriginalExtension();
        $req->image->move('foodimage',$imagename);
        $data->image = $imagename;
        $data->title = $req->title;
        $data->price = $req->price;
        $data->description = $req->description;
        $data->save();
        return redirect('/foodlist');


    }
    public function foodlist(){
        $data = Food::all();
        return view('admin.foodlist',compact('data'));
    }
    
    public function deletefood($id){
        $users = food::find($id);
        $users->delete();
        return redirect()->back(); 
    }

    public function uploadfood(Request $req , $id){
    
        $data = Food::find($id);
        $image = $req->image;
        if($image){
            $imagename = time().'-'.$image->getClientOriginalExtension();
            $req->image->move('foodimage',$imagename);
            $data->image = $imagename;
        }
        $data->title = $req->title;
        $data->price = $req->price;
        $data->description = $req->description;
        $data->save();
        return redirect('/foodlist');


    }

    public function editfood($id){

        $data = Food::find($id);
        return view('admin.editfood',compact('data'));
    }

    public function insertreservation(Request $req){
        						
        $data = new Reservation;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->guest = $req->guest;
        $data->date = $req->date;
        $data->time = $req->time;
        $data->message = $req->message;
        $data->save();
        return redirect()->back();
    }

    public function showreservation(){
        $data = Reservation::all();
        return view('admin.showreservation',compact('data'));
    }
    public function deletereservation($id){
        $users = Reservation::find($id);
        $users->delete();
        return redirect()->back();
    }
    public function viewreservation($id){
        $data = Reservation::find($id);
        return view('admin.viewreservation',compact('data'));
    }

    public function viewchef(){
        
        return view('admin.viewchef');
    }

    public function insertchef(Request $req){
    
        $data = new Foodchef;
        $image = $req->image;
        $imagename = time().'-'.$image->getClientOriginalExtension();
        $req->image->move('foodimage',$imagename);
        $data->image = $imagename;
        $data->title = $req->title;
        $data->name = $req->name;
        $data->save();
        return redirect()->back();


    }

    public function showchef(){
        $data = Foodchef::all();
        return view('admin.showchef',compact('data'));
    }

    public function deletechef($id){
        $users = Foodchef::find($id);
        $users->delete();
        return redirect()->back();
    }
    public function editchef($id){
        $data = Foodchef::find($id);
        return view('admin.editchef',compact('data'));
    }
    
    public function updatechef(Request $req,$id){
    
        $data = Foodchef::find($id);
        $image = $req->image;
        if($image){
        $imagename = time().'-'.$image->getClientOriginalExtension();
        $req->image->move('foodimage',$imagename);
        $data->image = $imagename;
        }
        
        $data->title = $req->title;
        $data->name = $req->name;
        $data->save();
        return redirect()->back();


    }
    public function foodorder(){
        $data = Order::all();
        return view('admin.foodorder',compact('data'));
    }
    public function deleteOrder($id){
        $users = Order::find($id);
        $users->delete();
        return redirect()->back();
    }
    
    public function search(Request $req){
        $search = $req->search;

        $data = Order::where('foodname','like','%'.$search.'%')->orWhere('name','like','%'.$search.'%')->get();
        return view('admin.foodorder',compact('data'));
    }

}