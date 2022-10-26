<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class Catalog extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('catalog', [
            'product' => $product
        ]);

        
    }
}
