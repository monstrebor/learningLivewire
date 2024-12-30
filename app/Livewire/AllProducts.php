<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class AllProducts extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.all-products');
    }
}
