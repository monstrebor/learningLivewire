<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $form;

    public function loginUser()
    {
        $this->form->validate();

        if (Auth::attempt(['email' => $this->form->email, 'password' => $this->form->password])) {
            return redirect()->route('admin.home');
        } else {
            session()->flash('error', 'Invalid credentials, please try again.');
            return back();
        }
    }







    public function render()
    {
        return view('livewire.login');
    }
}
