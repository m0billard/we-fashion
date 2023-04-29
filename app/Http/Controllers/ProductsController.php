<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index() // Récupère la liste de tous les produits puis l'envoie
    {
        $products = Products::all();
        return view('welcome', ['products' => $products]);
    }
    public function show(int $id) // Affiche la page d'un produit spécifique
    {
        $products = Products::findOrFail($id);
        return view('product', ['product' => $products]);
    }
    public function admin() // Affiche la page admin de gestion des produits
    {
        $products = Products::all();
        return view('admin', ['products' => $products]);
    }
    public function edit(int $id) // Appelle le formulaire d'édition de produits
    {
        $products = Products::findOrFail($id);
        return view('edit', ['product' => $products]);
    }
    public function create() // Appelle le formulaire de création de produits
    {
        return view('edit');
    }
    public function update(Request $request, $id)
    {
        $products = Products::findOrFail($id);
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->save();
        return redirect()->route('products.admin');
    }
    public function store(Request $request) // Fonction de stockage des nouveaux produits dans la BDD
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'visible' => 'required|boolean',
            'state' => 'required|boolean',
            'reference' => 'required|unique:products|max:255',
        ]);

        $product = new Products();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->visible = $validatedData['visible'];
        $product->state = $validatedData['state'];
        $product->reference = $validatedData['reference'];
        $product->save();
        return redirect()->route('products.admin');
    }
}
