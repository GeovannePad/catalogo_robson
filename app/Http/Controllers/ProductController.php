<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Http\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index.index', ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create.index', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $imageName = "$request->inputName" . time() . '.' . $request->inputImage->getClientOriginalExtension();

        $request->inputImage->move(public_path('images'), $imageName);

        $product->image = $imageName;
        $product->name = $request->inputName;
        $product->value = $request->inputValue;
        $product->description = $request->inputDescription;
        $product->category_id = $request->inputCategory;

        $product->save();

        return redirect()->route('indexProduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('products.show.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('products.edit.index', ['product'=>$product, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::find($id);

        $imageName = "$request->inputName" . time() . '.' . $request->inputImage->getClientOriginalExtension();
        $request->inputImage->move(public_path('images'), $imageName);

        $image_path = "images/$product->image";
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $product->image = $imageName;
        $product->name = $request->inputName;
        $product->value = $request->inputValue;
        $product->description = $request->inputDescription;
        $product->category_id = $request->inputCategory;

        $product->save();

        return redirect()->route('indexProduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $image_path = "images/$product->image";
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        Product::destroy($id);
        return redirect()->route('indexProduct');
    }
}
