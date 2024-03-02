<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function get_category(){
        $category = Category::orderBy('id', 'desc')->get();
        return response()->json([
            'category' => $category
        ], 200);
    }

    public function delete_category($id){
        $category = Category::findOrFail($id);
        $category->delete();
    }

    public function add_category(Request $request){
        Category::insert([
            'category_name' => $request->category_name,
            'created_at' => Carbon::now(),
        ]);
    }

}
