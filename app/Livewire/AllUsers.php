<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\{Component, WithPagination};
use Livewire\Attributes\Computed;

class AllUsers extends Component
{
    use WithPagination;

    public $q = '';
    public $pagination = 10; // To still run the search

    #[Computed(persist: true, seconds: 7200)]
    public function getUsersProperty()
    {
        if (!$this->q) {
            return User::simplePaginate($this->pagination);
        } else {
            return User::where('name', 'like', '%' . $this->q . '%')
                ->orWhere('email', 'like', '%' . $this->q . '%')
                ->simplePaginate($this->pagination);
        }
    }

    public function render()
    {
        return view('livewire.all-users', [
            'users' => $this->users, // Pass users to the view
        ]);
    }

    public function updatedQ()
    {
        $this->resetPage();
    }
}
