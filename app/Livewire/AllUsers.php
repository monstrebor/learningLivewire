<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\{Component, WithPagination};
use Livewire\Attributes\Computed;

class AllUsers extends Component
{
    use WithPagination;

    public $q;
    public $pagination = 10;

    #[Computed(persist:true,seconds:7200)] //to still run the search 
    public function users()
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
        return view(
            'livewire.all-users',
            // 'users' => User::cursorPaginate(5),
            // 'users'=>User::simplePaginate(5),
        );
    }

    public function updatedQ()
    {
        $this->resetPage();
    }
}
