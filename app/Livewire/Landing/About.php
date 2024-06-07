<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use Livewire\Attributes\Layout;

class About extends Component
{
    #[Layout('livewire.Landing.layouts.app')]
    public function render()
    {
        return view('livewire.landing.about');
    }
}
