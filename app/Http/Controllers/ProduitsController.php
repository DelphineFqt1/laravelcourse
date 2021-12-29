<?php

namespace App\Http\Controllers;
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

}