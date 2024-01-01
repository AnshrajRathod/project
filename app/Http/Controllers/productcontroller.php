<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productcontroller extends Controller
{
    public function view() {
        $product = product::all();
        // dd($product); // Add this line for debugging
        $data = compact('product');
        return view('index')->with($data);
    }
    
public function add(){


return view('addproduct');
}
}
