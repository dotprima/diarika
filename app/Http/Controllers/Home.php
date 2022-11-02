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
            'product' => $product,

        ]);
    

        
    }

    public function whatsapp()
    {
        $productInfo = Product::where('id', $_GET['id'])->first();
        

        $url = "https://wa.me/6281395121992?text=".env('APP_URL')."catalog/".$productInfo->url;
        return redirect($url);

        
    }
}
