<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Products extends Component
{
    #[Layout('livewire.Landing.layouts.app')]
    public function render()
    {
        return view('livewire.landing.products');
    }
}
