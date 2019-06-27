<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $category = Category::find($product->categorie_id);
            $product->categorie_id = $category->name;
        }
        return view('welcome', ['products'=>$products]);
    }
}
