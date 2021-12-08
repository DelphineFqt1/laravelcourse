<?php

namespace App\Http\Controllers;

class ProduitsController extends Controller
{
    public function produits()
    {
        return view('produits.produits');
    }

}