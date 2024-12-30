<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class NavBar extends Component
{
    public function placeholder()
    {
        return <<<'HTML'
            <div class="placeholder-glow">
                <div class="placeholder col-12">
                </div>
            </div>
        HTML;
    }

    public function render()
    {
        sleep(1);
        return view('livewire.nav-bar');
    }
}
