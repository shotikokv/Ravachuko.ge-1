<?php

namespace App\Http\Controllers;

use DB;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $products = Product::latest()->search($keyword)->paginate(5);

        DB::table('products')->get();

        return view('products', compact('products', 'keyword'));
    }
}
