<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produitcontroller extends Controller
{
    public function index()
    {
        return view('produit');
    }
}
