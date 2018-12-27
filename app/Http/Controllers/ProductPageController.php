<?php

namespace App\Http\Controllers;

use DB;

class ProductPageController extends Controller
{
    public function index($name = NULL)
    {
        if(!$name)
        {
            return Redirect('/products');
        }

        $product = DB::table('products')->where('name', $name)->get();

        return view('productpage', compact('product'));
    }
}
