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

    public function cataloginfo($id)
    {
        $product = Product::where('_id', $id)->first();
        return view('admin.addcataloginfo',[
            'product' => $product
        ]);
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
 
        if($product->save()){
            return redirect()->back()->with('success', 'Data berhasil di update');
        }else{
            return redirect()->back()->with('error', 'Data gagal di update');   
        }
        

    }


    public function editcatalog(Request $request)
    {
        $product = Product::find($request->_id);
 
        $product->judul = $request->judul;
        $product->kategori = $request->kategori;

        if($request->image!==NULL){
            $product->image = $request->image;
        }

        if($request->deskripsi!==NULL){
            $product->deskripsi = $request->deskripsi;
        }
        $product->harga = $request->harga;
        $product->review = $request->review;
        $product->star = $request->star;
        $product->url = $request->url;
        $product->ukuran = $request->ukuran;
 
        if($product->save()){
            return redirect()->back()->with('success', 'Data berhasil di update');
        }else{
            return redirect()->back()->with('error', 'Data gagal di update');   
        }
        

    }

    public function deltecatalog(Request $request)
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
