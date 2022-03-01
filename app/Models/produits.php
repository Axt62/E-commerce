<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    use HasFactory;

protected $fillable = [
    'id',
    'nom',
    'description',
    'prix',
    'created_at',
    'img',
    'slug',
    'promotion'

];


protected $casts = [
    'created_at' => 'datetime:Y-m-d',
];

public function promotion() 
{
}
}
