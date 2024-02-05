<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\product;
use App\Models\cart;
use App\Models\Order;
class StripeController extends Controller
{
    public function index()
    {
        return view('home.stripe');
    }
    public function checkout(){
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $session = \Stripe\Checkout\Session::create([

            'line_items' => [[
              'price_data' => [
                'currency' => 'usd',
                'unit_amount' => 2000,
                'product_data' => [
                  'name' => 'Stubborn Attachments',
                  'images' => ["https://i.imgur.com/EHyR2nP.png"],
                ],
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success'),
        ]);
        $cart = cart::where('user_id',Auth::user()->id)->get();
        foreach($cart as $c){
            $order = new Order;
            $order->user_id = Auth::user()->id;
            $order->product_id = $c->productId;
            $order->quantity = $c->quantity;
            $order->price = $c->price;
            $order->image = $c->image;
            $order->delivery_status = 'Card Payment';
            $order->product_title = $c->product_title;
            $order->save();
            $c->delete();
        }
        return redirect()->to($session->url);
    }
    public function success(){
        $usertype = Auth::user()->usertype;

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
}
