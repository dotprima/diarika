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
        ->add(Url::create('/'))
        ->add(Url::create('/catalog'))
        ->add(Url::create('/about'))
        ->add(Url::create('/contact'));

        $product = Product::all();
        foreach ($product as $products) {
            $date=date_create($products->updated_at);
            $sitemap->add(Url::create("/catalog/{$products->url}")->setLastModificationDate($date));
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
