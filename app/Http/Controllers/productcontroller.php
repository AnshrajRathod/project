<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\cart;
use App\Models\order;

class productcontroller extends Controller
{
        public function addview($id)


        {

                $product = product::where('id', $id)->first();


                $data = product::select('product.*', 'category_master.category_name',)
                        ->leftJoin('category_master', 'category_master.id', '=', 'product.category_id')->get();

                $data1 = compact('data', 'product');





                return view('addproduct')->with($data1);
        }
        public function add(Request $request, $id)
        {
                if(Auth::check()){
                $product = product::find($id);
                $userId = auth()->id();

                $cart = cart::where('product_id',$id)->first();

                if(!empty($cart)){
                        $cart->product_id = $product->id;
                        $cart->user_id = $userId;
                        $cart->quntity = $cart->quntity + 1;
                        $cart->price = $product->product_price;
                        $cart->product_image_path = $product->product_image_path;
                        $cart->status = 'pending';
                        $cart->save();
                }else{
                        $cart = new cart();
                        $cart->product_id = $product->id;
                        $cart->users_id = $userId;
                        $cart->quntity = 1;
                        $cart->price = $product->product_price;
                        $cart->product_image_path = $product->product_image_path;
                        $cart->status = 'pending';
                        $cart->save();
                }
        }else{
                return redirect()->route('login')->with('message', 'Please log in to add products to your cart.');
        }

                $data111 = compact('cart'); 
              
                session()->flash('addcart', 'signup successfull');
                return redirect()->back();
        }

        public function productview(Request $request)
        {
                $search = $request['search'] ?? "";
                $category = $request['category'] ?? "";

                if ($search != "") {
                    $product = Product::where('product_name', 'LIKE', "%$search%")->get();
                } elseif ($category != "") {

                    $product = Product::where('category', '=', $category)->get();
                } else {
                    $product = Product::all();
                }
                $data = product::select('product.*', 'category_master.category_name',)
                        ->leftJoin('category_master', 'category_master.id', '=', 'product.category_id')->get();

                $data1 = compact('data', 'product');

                return view('index')->with($data1);
        }

        public function cartview()
        {


                $cart = cart::select('add_cart.*', 'product.product_name', 'product.product_price', 'product.product_description')
                ->leftJoin('product', 'product.id', '=', 'add_cart.product_id')->get();


                $data = compact('cart');
                return view('cartview')->with($data);


        }

        public function delete($id){
                $cart = cart::find($id);
                        $cart->delete();


                return redirect()->back();
        }
        public function order($id){

                $cart = cart::find($id);
                $userId = auth()->id();

                $product = product::find($cart->product_id );

                $order = new order;
                $order->product_id = $cart->product_id;
                $order->users_id = $cart->users_id;
                $order->quntity = $cart->quntity;
                $order->price = $product->product_price;
                $order->product_image_path = $product->product_image_path;
                $order->status = 'payment successful';
                $order->save();
   
                session()->flash('order', 'signup successfull');

                $cart->delete();
              
                return redirect()->back();
            }


            public function vieworder(){
             
                    $product = Product::all();
                  
                $order = order::all();

                

                $data = compact('product', 'order');
                return view('vieworder')->with($data);
                
            }

            public function updateQuantity(Request $request, $product_id)
            {
                $product = cart::find($product_id);
        
                if (!$product) {
                    return response()->json(['error' => 'Product not found'], 404);
                }
        
                $operation = $request->input('operation');
        
                switch ($operation) {
                    case 'increase':
                        $newQuantity = $product->quntity + 1;
                        break;
                    case 'decrease':
                        $newQuantity = max(1, $product->quntity - 1);
                        break;
                    default:
                        return response()->json(['error' => 'Invalid operation'], 400);
                }
        
               
                
                $product->quntity = $newQuantity;
                $product->save();
                $newPrice = $product->price * $newQuantity;
        
                return response()->json(['quantity' => $newQuantity, 'price' => $newPrice]);
            }
        
}
