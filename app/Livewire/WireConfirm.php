<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class WireConfirm extends Component
{
    public $userId;

    public function mount($userId)
    {
        $this->userId = $userId;
    }

    public function delete()
    {
        User::find($this->userId)->delete();
        session()->flash('success','User Deleted Successfully.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.wire-confirm');
    }
}
