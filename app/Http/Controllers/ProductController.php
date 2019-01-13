<?php

namespace App\Http\Controllers;

use DB;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = DB::table('categories')->get();

        $keyword = $request->input('keyword');

        $products = Product::latest()->search($keyword)->paginate(5);

        DB::table('products')->get();

        return view('products')
            ->with(compact('products'))
            ->with(compact('keyword'))
            ->with(compact('categories'));
    }
}
