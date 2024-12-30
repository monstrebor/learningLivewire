<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterForm extends Form
{
    // #[Rule('required', as: 'nigga')]
    #[Rule('required', message: 'your dumb as fvck name is required bitch')]
    public $name;

    #[Rule('required|unique:users|email')]
    public $email;

    #[Rule('required|min:3')]
    public $password;
}
