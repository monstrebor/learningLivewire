<?php

namespace App\Livewire\Study;

use Carbon\Carbon;
use Livewire\Component;

class Polling extends Component
{
    public function render()
    {
        return view('livewire.study.polling',[
            'time' => Carbon::now()
        ]);
    }
}
