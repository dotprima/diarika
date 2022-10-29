<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('admin.dashboard', [
            'product' => $product
        ]);
    }

    public function addcatalog()
    {
        
        return view('admin.addcatalog');
    }

    public function storecatalog(Request $request)
    {
        $product = new Product;
 
        $product->judul = $request->judul;
        $product->deskripsi = $request->deskripsi;
        $product->kategori = $request->kategori;
        $product->image = $request->image;
        $product->harga = $request->harga;
        $product->review = $request->review;
        $product->star = $request->star;
        $product->url = $request->url;
        $product->ukuran = $request->ukuran;
 
        $product->save();

    }
}
