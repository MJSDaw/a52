<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public static $products = [
        ["id" => 1,
        "name" => "Mouse",
        "description" => "Raton con cable",
        "image" => "mouse",
        "price" => 59.99],
        ["id" => 2, 
        "name" => "Keyboard",
        "description" => "Teclado con cable",
        "image" => "keyboard",
        "price" => 79.48],
        ["id" => 3,
        "name" => "Headset",
        "description" => "Cascos con cable",
        "image" => "headset",
        "price" => 39.98],
        ["id" => 4,
        "name" => "Microphone",
        "description" => "Micrófono con cable",
        "image" => "microphone",
        "price" => 120.00]
    ];

    function index() {
        return view('product.index')
            ->with([
                "title" => "Products",
                "subtitle" => "All The Products Here!",
                "products" => self::$products
            ]);
    }
    
    function show($id) {
        $product = collect((self::$products))->firstWhere("id", $id);
        return view("product.show")
            ->with([
                "id" => $id,
                "title" => "Product",
                "subtitle" => $product['name'],
                "products" => $product
            ]);
    }
}
