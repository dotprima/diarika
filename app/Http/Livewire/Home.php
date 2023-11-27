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
        if ($this->search == null) {
            $product = Product::take(9)->orderBy('id', 'desc')->get();
        } else {
            $product = Product::where('judul', 'like', '%' . $this->search . '%')->orderBy('id', 'desc')->get();
        }

        
        return view('livewire.home',[
            'product' => $product
        ]);
    }
}
