<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateUser extends Component
{
    public $name;
    // public $users;

    // public function mount()
    // {
    //     $this->users=User::all();
    // }



    public function render()
    {
        return view('livewire.create-user')->with([
            'email' => 'nigga@gmail.com',
            'users' => User::all()
        ]);
    }
}
