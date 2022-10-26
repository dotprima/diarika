<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('home', [
            'product' => $product
        ]);

        
    }
}
