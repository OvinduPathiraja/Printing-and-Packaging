<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\product;


class HomeController extends Controller
{
    public function index(){
        $product = product::paginate(9);
        return view('home.userpage',compact('product'));
    }

    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.dashboard');
        }
        else if($usertype == '2'){
            return view('design.portfolio');
        }
        else{
            $product = product::paginate(12);
            return view('home.portfolio',compact('product'));
        }
    }

    public function product_details($id){
        $product=product::find($id);
        return view('home.product_details',compact('product'));
    }

    public function add_cart($id){
        if(Auth::id()){
            return redirect()->back();
        }else{
            return redirect('login');
        }
    }
}