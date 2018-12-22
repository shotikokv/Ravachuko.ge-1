<?php

namespace App\Http\Controllers;

use DB;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);

        DB::table('products')->get();

        return view('products', compact('products'));
    }
}
