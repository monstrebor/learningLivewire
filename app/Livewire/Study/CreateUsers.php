<?php

namespace App\Livewire\Study;

use App\Models\User;
use Livewire\Component;

class CreateUsers extends Component
{
    public $name;
    // public $users;

    // public function mount()
    // {
    //     $this->users=User::all();
    // }



    public function render()
    {
        return view('livewire.study.create-users')->with([
            'email' => 'nigga@gmail.com',
            'users' => User::all()
        ]);
    }
}
