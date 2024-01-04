<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;

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
                $product = product::find($id);
                $userId = auth()->id();
               
                $cart = cart::where('product_id',$id)->first();

                if(!empty($cart)){
                        $cart->product_id = $product->id;
                        $cart->users_id = $userId;
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
              

                $data111 = compact('cart'); 
              

                return redirect()->route('cartview');
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
                // $cart = cart::where('id', $id)->first();
                // dd($id);
               
                
                        $cart->delete();
                

                return redirect()->back();
        }

        
}
