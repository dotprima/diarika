<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Homes;
class Catalog extends Controller
{
    public function index()
    {
        $home = Homes::first();
        return view('catalog',[
            'home' => $home
        ]);

        
    }

    public function catalogInfo($id)
    {
        $product = Product::take(3)->get();
        $home = Homes::first();
        $productInfo = Product::where('url', $id)->first();
        return view('catalogInfo', [
            'product' => $product,
            'productInfo'=> $productInfo,
            'home' => $home
        ]);

    }
}
