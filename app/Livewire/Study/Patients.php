<?php

namespace App\Livewire\Study;

use Livewire\Component;

class Patients extends Component
{
    public $title = "Create Patient";
    // public $title = "Create Patient";

    public function render()
    {
        return view('livewire.study.patients');
    }
}
