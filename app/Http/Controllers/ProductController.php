<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('product.index')->with([
            "title" => "Products",
            "subtitle" => "All The Products Here!",
            "products" => $products 
        ]);
    }
    
    public function show($id) {
        $product = Product::findOrFail($id);

        return view("product.show")->with([
            "id" => $id,
            "title" => "Product",
            "subtitle" => $product->name,
            "products" => $product
        ]);
    }
}
