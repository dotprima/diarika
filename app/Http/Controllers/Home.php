<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Http\Request;

class Home extends Controller
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $product = Product::all();
        return view('home', [
            'product' => $product,

        ]);
    

        
    }

    


    public function sitemap()
    {
        $sitemap = Sitemap::create()
        ->add(Url::create('/')->setPriority(1.0))
        ->add(Url::create('/catalog')->setPriority(0.9))
        ->add(Url::create('/about')->setPriority(0.8))
        ->add(Url::create('/contact')->setPriority(0.7));

        $product = Product::all();
        foreach ($product as $products) {
            $date=date_create($products->updated_at);
            $sitemap->add(Url::create("/catalog/{$products->url}")->setLastModificationDate($date)->setPriority(0.6));
        }
        $sitemap->writeToFile('sitemap.xml');
    
    }


    public function whatsapp()
    {
        $productInfo = Product::where('id', $_GET['id'])->first();
        

        $url = "https://wa.me/6281395121992?text=".env('APP_URL').'/catalog/'.$productInfo->url;
        return redirect($url);

        
    }
}
