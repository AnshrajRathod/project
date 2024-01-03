<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;

class productcontroller extends Controller
{
        public function addview($id)


        {
                // $product = product::find($id);
                // DB::enableQueryLog();
                $product = product::where('id', $id)->first();


                $data = product::select('product.*', 'category_master.category_name',)
                        ->leftJoin('category_master', 'category_master.id', '=', 'product.category_id')->get();

                $data1 = compact('data', 'product');

                //   dd($data1);



                return view('addproduct')->with($data1);
        }
        public function add(Request $request, $id)
        {
                $product = product::find($id);

                $userId = auth()->id();
                // dd($userId);


                $cart = new cart();
                $cart->product_id = $product->id;
                $cart->users_id = $userId;
                $cart->quntity = 1; 
                $cart->price = $product->product_price; 
                $cart->product_image_path = $product->product_image_path;  
                $cart->status = 'pending'; 
                $cart->save();

                $data111 = compact('cart'); 
                // dd($cart);

                return redirect()->route('cartview');
        }
        // public function add(Request $request ,$id)
        // {
        //         $product = product::find($id);
        //         dd($product);

        //         // return view('addproduct');
        //         return redirect()->route('cart.add')->with('success', 'Product added to cart successfully.');
        // }
        public function productview(Request $request)
        {
                $search = $request['search'] ?? "";  
        if($search != ""){
            $product = product::where('product_name', 'LIKE', "%$search%")->get();
        }else{
                $product = product::all();
        }
                $data = product::select('product.*', 'category_master.category_name',)
                        ->leftJoin('category_master', 'category_master.id', '=', 'product.category_id')->get();

                $data1 = compact('data', 'product');

                return view('index')->with($data1);
        }

        public function cartview()
        {

                
                
        }
}
