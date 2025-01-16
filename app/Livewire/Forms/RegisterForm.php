<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class RegisterForm extends Form
{
    #[Rule('required')]
    public $name;

    #[Rule('required|unique:users|email')]
    public $email;
}
