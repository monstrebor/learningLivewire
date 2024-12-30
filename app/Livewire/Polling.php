<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Polling extends Component
{
    public function render()
    {
        return view('livewire.polling',[
            'time' => Carbon::now()
        ]);
    }
}
