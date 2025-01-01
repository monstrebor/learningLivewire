<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\{Rule,On};
use Livewire\Component;

class CreateProducts extends Component
{
    public $product;
    public $formTitle = 'Create Product';
    public $editForm = false;

    #[Rule('required')]
    public $title;

    #[Rule('required')]
    public $description;

    #[Rule('required')]
    public $price;

    public function save()
    {
       $validated = $this->validate();
       Product::create($validated);
       $this->dispatch('refresh-products');
       session()->flash('status','product created');
        $this->reset();
    }

    public function close()
    {
        $this->reset();
    }

    #[On('edit-mode')]
    public function edit($id)
    {
        $this->editForm = true;
        $this->formTitle = 'Edit Product';

        $this->product = Product::findOrFail($id);
        $this->title = $this->product->title;
        $this->description = $this->product->description;
        $this->price = $this->product->price;
    }

    public function update()
    {
        $validated = $this->validate();

        $p = Product::findOrFail($this->product->id);

        $p->update($validated);

        $this->dispatch('refresh-products');

        session()->flash('status','Product Updated Successfully.');
    }

    public function render()
    {
        return view('livewire.create-products');
    }
}
