<?php

namespace App\Livewire;

use App\Livewire\Forms\RegisterForm;
use App\Mail\WelcomeEmail;
use App\Models\Admin;
use Illuminate\Support\Facades\{Hash,Mail};
use Illuminate\Support\Str;
use Livewire\Component;

class Register extends Component
{
    public RegisterForm $form;

    public function registerUser()
    {
        $this->form->validate();

        // Generate a random 5-character password
        $password = Str::random(5);
        
        // Create an admin
        $admin = Admin::create([
            'email' => $this->form->email,
        ]);

        // Create a user and hash the password
        $admin->users()->create([
            'name' => $this->form->name,
            'email' => $this->form->email,
            'password' => Hash::make($password),
            'is_new' => true,
            'status' => 'active',
        ]);

        // Send the welcome email
        $details = [
            'name' => $this->form->name,
            'email' => $this->form->email,
            'password' => $password,
        ];
        Mail::to($this->form->email)->send(new WelcomeEmail($details));

        session()->flash('success', 'Account created successfully! A welcome email has been sent.');
        return redirect()->route('home.login');
    }


    public function render()
    {
        return view('livewire.register');
    }
}

