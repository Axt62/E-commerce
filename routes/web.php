<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accueilcontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\produitscontroller; // Page produitS   
use App\Http\Controllers\produitcontroller; // Page produit

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [accueilcontroller::class, 'Index' ]);
Route::get('/produits', [produitscontroller::class, 'Index']);
Route::get('/produit', [produitcontroller::class, 'Index']);
Route::get('/contact', [contactcontroller::class, 'Index']);
