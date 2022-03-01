<?php

namespace App\Http\Controllers;

use App\Models\produits;
use Illuminate\Http\Request;

class produitscontroller extends Controller
{
    public function index()
    {
        $produits = Produits::all();

        return view('produits', [
            'produits' => $produits
        ]);
    }

       
    public function show(Produits $produits)
    {
        return view('produit', [
            'produit' => $produits,
        ]);
    }
}