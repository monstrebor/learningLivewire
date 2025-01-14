<?php

namespace App\Livewire;

use App\Livewire\Forms\RegisterForm;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public RegisterForm $form;

    public function registerUser()
    {
        $this->form->validate();
        $admin = Admin::create([
            'email' => $this->form->email,
        ]);
        $admin->users()->create([
            'name' => $this->form->name,
            'email' => $this->form->email,
            'is_new' => true,
            'status' => 'active',
            'password' => Hash::make($this->form->password),
        ]);

        session()->flash('success', 'Account created successfully!');
        return redirect()->route('home.login');
    }

    public function render()
    {
        return view('livewire.register');
    }
}

