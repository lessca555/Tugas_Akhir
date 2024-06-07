<?php

namespace App\Livewire\Dash;

use Livewire\Component;
use Livewire\WithFileUploads as LivewireWithFileUploads;

class Dashboard extends Component
{
    public $file;

    use LivewireWithFileUploads;

    public function render()
    {
        return view('livewire.dash.dashboard');
    }
}
