<?php

namespace App\Livewire\Study;

use App\Models\Register;
use Livewire\Component;

class MultiStep extends Component
{
    public $currentStep = 1;
    public $total_steps = 3;

    //set properties
    public $first_name;
    public $middle_name;
    public $last_name;
    public $email;
    public $phone;
    public $status;
    public $gender;

    //This is my own approach
    // public function previous_step()
    // {
    //     $this->currentStep = $this->currentStep - 1;
    // }
    // public function next_step()
    // {
    //     $this->currentStep = $this->currentStep + 1;
    // }
    public function incrementSteps()
    {
        $this->validateForm();
        if ($this->currentStep < $this->total_steps) {
            $this->currentStep++;
        }
    }

    public function decrementSteps()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function validateForm()
    {
        if ($this->currentStep === 1) {
            $validated = $this->validate([
                'first_name' => 'required',
                'middle_name' => 'required',
                'last_name' => 'required',
            ]);
        } elseif ($this->currentStep === 2) {
            $validated = $this->validate([
                'email' => 'required|email|max:255',
                'phone' => 'required|min:11 ',
            ]);
        }
    }

    public function submit()
    {
        $validated = $this->validate([
            'status' => 'required',
            'gender' => 'required',
        ]);

        Register::create([
            'first_name'=>$this->first_name,
            'middle_name'=>$this->middle_name,
            'last_name'=>$this->last_name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'status'=>$this->status,
            'gender'=>$this->gender,
        ]);
        session()->flash('success','The form registered successfully.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.study.multi-step');
    }
}
