<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get_product(){
        
        $products = Product::with('category', 'brand')->get();
        return response()->json([
            'products' => $products
        ], 200);
      
    }

    public function add_products(Request $request){
        $request->validate([
            'product_name' => 'required|string',
            'product_price' => 'required|numeric',
            'product_quantity' => 'required|integer',
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'product_details' => 'required|string',
            'product_img' => 'required|image|mimes:jpeg,png,jpg,gif',
           
        ]);
        $imagePath = $request->file('product_img')->store('product_images', 'public');
        $imagePath =  storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . $imagePath );
      //--------------------------------
        // $newProduct = new Product(); 
        // $newProduct->fill($request->except('product_img'));
        
        // $newProduct->product_img = $imagePath;

        // $newProduct->save();
        //----------------------
        Product::insert([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_quantity' => $request->product_quantity,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'product_details' => $request->product_details,
            'product_img' =>  $imagePath,
            'created_at' => Carbon::now(),
        ]);

        return response()->json([
            // 'newProduct' => $newProduct
            'message' => 'Product added successfully'
        ]);
    }

    public function edit_product($id){
        $product = Product::find($id);
        return response()->json([
            'product' => $product
        ], 200);
    }


}
