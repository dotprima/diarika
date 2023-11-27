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
        $count = Product::count();

        if ($this->search == null) {
            if ($this->sortField) {
                $product = Product::where('kategori', $this->sortField)->orderBy('id', 'desc')->paginate(6);
            } else {
                $product = Product::orderBy('id', 'desc')->paginate(6);
            }
        } else {
            $product = Product::where('judul', 'like', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate(6);
        }

        return view('livewire.catalog',[
            'product' => $product,
            'count' => $count
        ]);
    }

    public function sortBy($field)
    {
        $this->sortField = $field;
    }
}
