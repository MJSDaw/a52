<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $imagePath = "";
        $request->image ? $imagePath = $request->file('image')->store('/storage/app/public') : $imagePath = 'image.jpg'; 
        $product->image = $imagePath;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Producto creado exitosamente.');
    }
}