<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productcontroller extends Controller
{
        public function addview(){


        return view('addproduct');
        }
        public function add(){


        return view('addproduct');
        }
        public function productview(Request $request){

        $search = $request->input('search', '');

        if($search != ""){
                $product = product::where('product_name', 'LIKE', "%$search%")->get();
        } else {
                $product = product::all();
        }

        $data = product::select('product.*', 'category_master.category_name')
                ->leftJoin('category_master', 'category_master.id', '=', 'product.category_id')
                ->get();

        $data1 = compact('data', 'product');
        return view('index', $data1);
        }
        
}
