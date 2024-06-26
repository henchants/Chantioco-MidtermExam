<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // Logic to fetch products and return a view
        $products = [
            ['name' => 'Laptop', 'price' => 60000],
            ['name' => 'Smartphone', 'price' => 40000], 
            ['name' => 'Tablet', 'price' => 25000],
            ['name' => 'Headphones', 'price' => 7500], 
            ['name' => 'Bluetooth Speaker', 'price' => 10000],
            ['name' => 'External Hard Drive', 'price' => 5000],
            ['name' => 'Wireless Mouse', 'price' => 2500], 
            ['name' => 'Mechanical Keyboard', 'price' => 6000], 
            ['name' => 'Monitor', 'price' => 15000], 
            ['name' => 'Gaming Chair', 'price' => 12500],
            ['name' => 'Fitness Tracker', 'price' => 4000], 
            ['name' => 'Coffee Maker', 'price' => 3500], 
            ['name' => 'Electric Kettle', 'price' => 2000], 
            ['name' => 'Sunglasses', 'price' => 6000], 
            ['name' => 'Backpack', 'price' => 4500], 
            ['name' => 'Running Shoes', 'price' => 7500]
        ];

        return view('products.index', ['products' => $products]);
    }
    public function show($id)
    {
        // Logic to fetch a specific product by ID and return a view
        $product = ['id' => $id, 'name' => 'Product Name', 'price' => 100];

        return view('products.show', ['product' => $product]);
    }

    // Other controller actions (e.g., store, update, delete) can be defined as needed
}
