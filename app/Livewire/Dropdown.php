<?php

namespace App\Livewire;

use App\Models\County;
use App\Models\Subcounty;
use Livewire\Component;

class Dropdown extends Component
{
    public $counties;
    public $selectedcounty = null;
    public $subcounties;

    public function mount()
    {
        $this->counties = County::all();
    }

    public function updatedSelectedCounty()
    {
        $this->subcounties=Subcounty::where('county_code',$this->selectedcounty)->get();
    }

    public function render()
    {
        return view('livewire.dropdown');
    }
}
