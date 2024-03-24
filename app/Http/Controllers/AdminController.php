<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
use App\Models\product;
use App\Models\user;
use App\Models\quote;
use Barryvdh\DomPDF\PDF;


class AdminController extends Controller
{
    public function view_category(){
        $data=category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request){
        $data= new category;

        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message','Category added successfully');


    }

    public function delete_category($id){
        $data = category::find($id);

        $data->delete();
        return redirect()->back()->with('message','Category deleted successfully');
    }

    public function view_product(){
        $category=category::all();
        return view('admin.product',compact('category'));
    }

    public function add_product(Request $request){
        $products=new product;

        $products->title=$request->title;

        $products->description=$request->description;

        $products->price=$request->price;

        $products->quantity=$request->quantity;

        $products->category=$request->category;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product',$imagename);

        $products->image=$imagename;

        $products->save();

        return redirect()->back()->with('message','Product Added Successfully');
    }

//comment

    public function show_product(){
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }
        public function show_quote(){
        $quote=quote::all();
        return view('design.view_quote',compact('quote'));
    }
    public function delete_product($id){
        $product=product::find($id);

        $product->delete();

        return redirect()->back()->with('message','Product deleted successfully');

    }
        public function delete_quote($id){
        $quote=quote::find($id);

        $quote->delete();

        return redirect()->back()->with('message','quote deleted successfully');

    }
    public function update_product($id){
        $product=product::find($id);
        $category=category::all();

        return view('admin.update_product',compact('product','category'),);
    }//////////////////

        public function update_quote($id){
        $quote=quote::find($id);
        $category=category::all();

        return view('design.update_quote',compact('quote','category'),);
    }
     public function update_user($id){
        $user=user::find($id);

        return view('admin.edit_user',compact('user'),);
    }
    public function update_product_confirm(Request $request,$id){
        $product=product::find($id);

        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->category=$request->category;
        $product->quantity=$request->quantity;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','Product updated successfully');

    }
    public function update_quote_confirm(Request $request,$id){
        $quote=quote::find($id);

        $quote->description=$request->description;
        $quote->mobile=$request->mobile;
        $quote->category=$request->category;
        $quote->quantity=$request->quantity;

        $quote->save();

        return redirect()->back()->with('message','quote updated successfully');

    }

    public function user(){
        $data=user::all();

        return view('admin.user',compact("data"));
    }

    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function view_quote(){
        $category=category::all();
        return view('home.quote',compact('category'));
    }

    public function quote(Request $request){
        $quote=new quote();

        $quote->description=$request->description;

        $quote->quantity=$request->quantity;

        $quote->category=$request->category;

        $quote->mobile=$request->mobile;

        $quote->save();

        return redirect()->back()->with('message','quote Added Successfully');
    }

    public function admin_order(){
        $order=Order::all();
        return view('admin.order',compact('order'));
    }

    public function deliver($id){
        $order=Order::find($id);
        $order->delivery_status='Delivered';
        $order->save();
        return redirect()->back()->with('message','Order Delivered Successfully');
    }

    public function print_pdf($id)
{
    $order = Order::find($id);

    if (!$order) {
        return response()->json(['error' => 'Order not found'], 404);
    }

    // Create an instance of the PDF class
    $pdf = app('dompdf.wrapper');

    // Use the instance to load the view
    $pdf->loadView('admin.pdf', compact('order'));

    return $pdf->download('invoice.pdf');
}

public function delete_order($id){
    $order=Order::find($id);
    $order->delete();
    return redirect()->back()->with('message','Order Deleted Successfully');
}

}
