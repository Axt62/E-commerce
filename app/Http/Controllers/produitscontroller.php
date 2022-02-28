<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produitscontroller extends Controller
{
    public function index()
    {
        return view('produits');
    }
}
