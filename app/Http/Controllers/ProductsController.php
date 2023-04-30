<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index() // Récupère la liste de tous les produits puis l'envoie
    {
        $products = Products::simplePaginate(6);
        return view('welcome', ['products' => $products]);
    }

    public function show(int $id) // Affiche la page d'un produit spécifique
    {
        $products = Products::findOrFail($id);
        return view('product', ['product' => $products]);
    }

    public function admin() // Affiche la page admin de gestion des produits
    {
        $products = Products::simplePaginate(15);
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

    public function update(Request $request, $id) // Fonction de mise à jour de la BDD à chaque edit de produits
    {
        $products = Products::findOrFail($id);
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->visible = $request->input('visible');
        $products->state = $request->input('state');
        $products->reference = $request->input('reference');
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

    public function filterByState($state) // Fonction pour tirer les articles soldés des articles non soldés sur la page d'accueil
    {
        $products = Products::where('state', $state)->get();
        return view('state', ['products' => $products]);
    }

    public function destroy(int $id) // Fonction pour supprimer un produit sur la page admin
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->route('products.admin');
    }
}
