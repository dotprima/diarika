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

    public function whatsapp()
    {
        $productInfo = Product::where('_id', $_GET['id'])->first();
        

        $url = "https://wa.me/6281395121992?text=".env('APP_URL')."catalog/".$productInfo->url;
        return redirect($url);

        
    }
}
