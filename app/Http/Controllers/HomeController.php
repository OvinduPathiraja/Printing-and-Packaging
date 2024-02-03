<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;

use Stripe;


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

    public function add_cart(Request $request, $id){
        if(Auth::id()){
            $user = Auth::user();

            $product = product::find($id);

            $cart = new Cart;

            $cart->name = $user->name;

            $cart->price = $product->price;

            $cart->quantity = $request->quantity;

            $cart->image = $product->image;

            $cart->email = $user->email;

            $cart->product_title = $product->title;

            $cart->product_id = $product->id;

            $cart->user_id = $user->id;

            $cart->save();

            return redirect()->back()->with('success','Product added to cart successfully');
        }else{
            return redirect('login');
        }
    }

    public function show_cart(){
        $id = Auth::user()->id;
        $cart = Cart::where('user_id',$id)->get();
        // dd($cart);
        return view('home.showCart',compact('cart'));
    }

    public function delete_cart($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('success','Product deleted from cart successfully');
    }

    public function cash_order(){
        $user = Auth::user();
        $user_id = $user->id;
        $data=Cart::where('user_id',$user_id)->get();
        foreach($data as $item){
            $order = new Order;
            $order->name = $item->name;
            $order->price = $item->price;
            $order->quantity = $item->quantity;
            $order->image = $item->image;
            $order->email = $item->email;
            $order->phone = $item->phone;
            $order->address = $item->address;
            $order->product_title = $item->product_title;
            $order->user_id = $item->user_id;
            $order->product_id = $item->product_id;
            $order->delivery_status = 'cash on delivery';
            $order->payment_status = 'pending';
            $order->save();

            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        return redirect()->back()->with('success','Order placed successfully');
    }

    public function stripe($totalprice){
        return view('home.stripe',compact('totalprice'));
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com."
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }

}
