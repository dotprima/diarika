<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public $search;
 
    protected $queryString = ['search'];
    
    public function render()
    {
        if($this->search==null){
            $product = Product::take(9)->get();;
        }else{
            $product = Product::where('judul', 'like', '%'.$this->search.'%')->get();
        }

        
        return view('livewire.home',[
            'product' => $product
        ]);
    }
}
