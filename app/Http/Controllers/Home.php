<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Homes;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $product = Product::all();
        $home = Homes::first();
        return view('home', [
            'product' => $product,
            'home' => $home
        ]);
    

        
    }
}
