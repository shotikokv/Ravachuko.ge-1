<?php

namespace App\Http\Controllers;

use DB;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::get();

        $keyword = $request->input('keyword');

        $products = Product::latest()->search($keyword)->paginate(5);

        return view('products')
            ->with(compact('products'))
            ->with(compact('keyword'))
            ->with(compact('categories'));
    }

    public function categoryProducts($id = null)
    {
        if(!$id)
        {
            return Redirect('/products');
        }

        $categories = Category::get();

        $products = Category::find($id)->products()->paginate(5);

        return view('products')
            ->with(compact('id'))
            ->with(compact('products'))
            ->with(compact('categories'));
    }
}
