<?php

namespace App\Livewire;

// use Illuminate\Support\Facades\Validator;

use App\Livewire\Forms\RegisterForm;
use Livewire\Component;

class RegisterUser extends Component
{
    //Validating using the rules method
    /*
    public function rules()
    {
        return[
            'name'=>'required',
             'email'=>'required|unique:users|email',
             'password'=>'required|min:3',
        ];
    }
    */
    public RegisterForm $form;

    public function save()
    {
        /*
         $validated=$this->validate([
             'name'=>'required',
             'email'=>'required|unique:users|email',
             'password'=>'required|min:3',
         ]);
        */

        //validating using the Validator
      /*
        $validated=Validator::make([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
        ],
        [
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:3',
        ],
        ['required' => 'the :attribute field is required NIGGA']
    )->validate();
    */

    $this->form->validate();
    }

    public function render()
    {
        return view('livewire.register-user');
    }
}
