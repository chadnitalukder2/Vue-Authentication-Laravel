<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function get_brand(){
        $brand = Brand::orderBy('id', 'desc')->get();
        return response()->json([
            'brand' => $brand
        ], 200);
    }

    public function delete_brand($id){
        $brand = Brand::findOrFail($id);
        $brand->delete();
    }

    public function add_brand(Request $request){
        Brand::insert([
            'brand_name' => $request->brand_name,
            'created_at' => Carbon::now(),
        ]);
    }

}
