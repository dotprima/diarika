<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class Catalog extends Controller
{
    public function index()
    {
        return view('catalog');

        
    }

    public function catalogInfo($id)
    {
        $product = Product::take(3)->get();
        $productInfo = Product::where('url', $id)->first();
        return view('catalogInfo', [
            'product' => $product,
            'productInfo'=> $productInfo
        ]);

    }
}
