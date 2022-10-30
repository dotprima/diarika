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
            'product' => $product,
            'active' => 'home'
        ]);
    }

    public function product()
    {
        $product = Product::all();
        return view('admin.product', [
            'product' => $product,
            'active' => 'product'
        ]);
    }

    public function addcatalog()
    {
        
        return view('admin.addcatalog',[
            'active' => 'addcatalog'
        ]);
    }

    public function storediskon(Request $request)
    {
        $product = Product::find($request->_id);

        if($request->diskon==0){
            $product->diskon = null;
        }else{
            $product->diskon = $request->diskon;
        }
        
        $product->status = $request->status;


        if($product->save()){
            return redirect()->back()->with('success', 'Data berhasil di update');
        }else{
            return redirect()->back()->with('error', 'Data gagal di update');   
        }
        
    }


    public function cataloginfo($id)
    {
        $product = Product::where('_id', $id)->first();
        return view('admin.addcataloginfo',[
            'product' => $product,
            'active' => 'editcatalog'
        ]);
    }

    public function catalogdiskon()
    {
        $product = Product::all();
        return view('admin.diskon', [
            'product' => $product,
            'active' => 'diskon'
        ]);
    }

    public function storecatalog(Request $request)
    {
        $product = new Product;
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $unique_name = md5($filename. time());

        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'harga' => 'required|integer',
            'review' => 'required|integer',
            'star' => 'required',
            'url' => 'required|unique:product',
            'ukuran' => 'required',
            'image' => 'required|mimes:jpg,bmp,png|max:1000',
        ]);

        $tujuan_upload = 'product';
        

        $product->judul = $request->judul;
        $product->deskripsi = $request->deskripsi;
        $product->kategori = $request->kategori;
        $product->image = $unique_name.".".$file->getClientOriginalExtension();
        $product->harga = $request->harga;
        $product->review = $request->review;
        $product->star = $request->star;
        $product->url = $request->url;
        $product->ukuran = $request->ukuran;
        $file->move($tujuan_upload, $unique_name.".".$file->getClientOriginalExtension());

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

        $this->validate($request, [
            'url' => 'required|unique:product'.$request->_id,
        ]);

        if($request->image!==NULL){
            $this->validate($request, [
                'image' => 'required|mimes:jpg,bmp,png|max:1000',
            ]);
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $unique_name = md5($filename. time());
            $tujuan_upload = 'product';
            $file->move($tujuan_upload, $unique_name.".".$file->getClientOriginalExtension());
            $product->image = $unique_name.".".$file->getClientOriginalExtension();
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