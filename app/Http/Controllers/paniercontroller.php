<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paniercontroller extends Controller
{
    public function index()
    {
        return view('panier');
    }
}
