<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Product;

class Catalog extends Component
{
    public $search;
    use WithPagination;
    protected $queryString = ['search'];
    protected $paginationTheme = 'bootstrap';
    public $sortField = false;

    public function render()
    {
        
        if($this->search==null){
            if($this->sortField){
                $product = Product::where('kategori',$this->sortField )->paginate(5);
            }else{
                $product = Product::paginate(5);
            }
        }else{
            $product = Product::where('judul', 'like', '%'.$this->search.'%')->paginate(5);
        }

        return view('livewire.catalog',[
            'product' => $product
        ]);
    }

    public function sortBy($field)
    {
        $this->sortField = $field;
    }
}
