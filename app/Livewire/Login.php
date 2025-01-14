<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $form;

    public function loginUser()
    {
        $this->form->validate();

        dd($this->form->email);
    }







    public function render()
    {
        return view('livewire.login');
    }
}
