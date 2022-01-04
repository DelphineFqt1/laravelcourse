<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Util\ImageLocalStorage;
use App\Models\Product;
use App\Models\User;
use App\Models\Vente;


class ProduitsController extends Controller
{
    public function produits()
    {
        $produits = Product::all();

        return view('produits.produits', ['produits' => $produits]);
    }

    public function consommations()
    {
        $user = auth()->user();

        return view('produits.consommations', ['user' => $user]);
    }

    public function sodas()
    {
        $sodas = Product::where('type', 'Soda')->get();

        return view('produits.sodas', ['sodas' => $sodas]);
    }

    public function alcools()
    {
        $alcools = Product::where('type', 'Alcool')->get();

        return view('produits.alcools', ['alcools' => $alcools]);
    }

    public function nourriture()
    {
        $nourritures = Product::where('type', 'Nourriture')->get();

        return view('produits.nourriture', ['nourritures' => $nourritures]);
    }

    public function create(){
        $data = [];
        $data['title'] = "Create product";
        $data['products'] = Product::all();

        return view('produits.create')->with("data", $data);
    }

    public function save(Request $request){

        $request->validate([
           "name" => "required|unique:products",
           "price" => "required|numeric|gt:0",
           "stock" => "required|numeric|gt:0",
           "type" => "required"
        ]);
        
        $file = Storage::disk('public')->put('product_images', $request->image);
        $path = "../storage/app/public/" . $file;
        
        Product::create($request->only(["name", "price", "description", "stock", "type"]));
        Product::where('name', $request->name)->update(['image' => $path]);

        return back()->with('success','Item created successfully!');

    }

}