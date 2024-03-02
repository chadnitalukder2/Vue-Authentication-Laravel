<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get_product(){
        $products = Product::orderBy('id', 'desc')->get();
        return response()->json([
            'products' => $products
        ], 200);
    }

    public function add_products(Request $request){
        $request->validate([
            'product_name' => 'required|string',
            'product_price' => 'required|numeric',
            'product_quantity' => 'required|integer',
            'product_details' => 'required|string',
            // 'product_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
           
        ]);
        $imagePath = $request->file('product_img')->store('product_images', 'public');
        $newProduct = Product::insert([
            'product_name' => $request->input('product_name'),
            'product_price' => $request->input('product_price'),
            'product_quantity' => $request->input('product_quantity'),
            'category_id' => $request->input('category_id'),
            'brand_id' => $request->input('brand_id'),
            'product_details' => $request->input('product_details'),
            'product_img' => $imagePath,
        ]);
    
        return response()->json([
            'newProduct' => $newProduct,
            'message' => 'Product added successfully'
        ]);
    }




}
