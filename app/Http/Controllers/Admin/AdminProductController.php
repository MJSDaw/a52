<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    function index() {
        $products = Product::all();
        return view('admin.product.index')->with([
            "title" => "Admin",
            "products" => $products 
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|gt:0',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->image = 'image.jpg'; 

        $product->save();

        return redirect()->route('products.index')->with('success', 'Producto creado exitosamente.');
    }
}