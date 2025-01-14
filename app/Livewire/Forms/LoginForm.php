<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class LoginForm extends Form
{
    #[Rule('required|unique:users|email',)]
    public $email;

    #[Rule('required|min:3')]
    public $password;
}
