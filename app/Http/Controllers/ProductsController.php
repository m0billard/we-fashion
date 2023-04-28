<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('welcome', ['products' => $products]);
    }
    public function show($id)
    {
        $products = Products::findOrFail($id);
        return view('product', ['product' => $products]);
    }
}
